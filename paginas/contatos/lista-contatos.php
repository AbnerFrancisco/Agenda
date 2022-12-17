<?php
// -- paginação
$quantidade = 10;
$pagina = (isset($_GET["pagina"]))?(int)$_GET["pagina"]:1;
$inicio = ($quantidade*$pagina)-$quantidade;



// ---------



$txtPesquisa = (isset($_POST['txtPesquisa']))?$_POST['txtPesquisa']:"";
// -- marca Favorito -------------
$codigoContato = (isset($_GET['codigoContato']))?$_GET['codigoContato']:"";
$flagFavoritoContato = (isset($_GET['flagFavoritoContato']) && $_GET['flagFavoritoContato'] === "s")?"n":"s";

$sql = "UPDATE tbcontatos SET flagFavoritoContato = '{$flagFavoritoContato}' WHERE codigoContato = '{$codigoContato}'";

mysqli_query($conexao, $sql);
// -------------------------------
?>

<h1><i class="bi bi-people-fill"></i> Lista Contatos</h1>
<div class="mb-3">
    <a class="btn btn-primary" href="index.php?menuop=cadastrar-contato">Adicionar Contato</a>
</div>
<div class="mb-3">
    <form action="index.php?menuop=lista-contatos" method="post">
 
        <div class="input-group">
        <label class="input-group-text" for="txtPesquisa">Pesquisar</label>
            <input class="form-control" type="search" name="txtPesquisa" id="txtPesquisa" value="<?=$txtPesquisa?>">
            <button class="btn btn-secondary" type="submit">
            <i class="bi bi-search"></i>
            </button>
        </div>
    </form>
</div>
<table class="table table-dark table-striped table-bordered  border-warning">
<thead>
    <tr>
        <th class='text-warning'><i class="bi bi-star-fill"></i></th>
        <th>Código</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Data de Nascimento</th>
        <th>Editar</th>
        <th>Excluir</th>
    </tr>
</thead>
<tbody>
<?php
$sql = "SELECT 
codigoContato,
nomeContato,
emailContato,
telefoneContato,
DATE_FORMAT(dataNascContato,'%d/%m/%Y') as dataNascContato,
flagFavoritoContato 
 FROM tbcontatos 
 WHERE 
 nomeContato LIKE '%{$txtPesquisa}%' 
 order by flagFavoritoContato desc,nomeContato asc 
 LIMIT $inicio,$quantidade
 ";

$rs = mysqli_query($conexao,$sql) or 
die("Erro ao executar a consulta. " . mysqli_error($conexao));
$corFavorito = "n";
while ($dados = mysqli_fetch_assoc($rs)) {

    if($dados["flagFavoritoContato"]=="s"){
        $corFavorito = "text-warning";
    }else{
        $corFavorito = "text-white-50";
    }

    echo "
        <tr>
            <td> 
            <a class='{$corFavorito}' href=\"?menuop=lista-contatos&codigoContato={$dados['codigoContato']}&flagFavoritoContato={$dados['flagFavoritoContato']}\">
            <i class=\"bi bi-star-fill\"></i>
            </a>
            </td>
            <td> {$dados['codigoContato']} </td>
            <td> {$dados['nomeContato']} </td>
            <td> {$dados['emailContato']} </td>
            <td> {$dados['telefoneContato']} </td>
            <td> {$dados['dataNascContato']} </td>
            <td class=\"text-center\">
                <a class='btn btn-warning' href='index.php?menuop=editar-contato&codigoContato={$dados['codigoContato']}'>
                <i class=\"bi bi-pencil-square\"></i> 
                </a>
            </td>
            <td class=\"text-center\">
                <a class='btn btn-danger' href='index.php?menuop=excluir-contato&codigoContato={$dados['codigoContato']}'>
                <i class=\"bi bi-trash3-fill\"></i> 
                </a>
            </td>
        </tr>
    ";
}
?>
</tbody>
</table>

<ul class="pagination">
<?php
$sqlTotal = "select codigoContato from tbcontatos";
$rsTotal = mysqli_query($conexao,$sqlTotal);
$numTotal = mysqli_num_rows($rsTotal);
$totalPaginas = ceil($numTotal/$quantidade);

for($i=1;$i<=$totalPaginas;$i++){
    if($i==$pagina){
        echo "<li class='page-item active'><a class='page-link' href='?menuop=lista-contatos&pagina=$i'>$i</a> </li>";
    }else{
        echo "<li class='page-item'><a class='page-link' href='?menuop=lista-contatos&pagina=$i'>$i</a> ";
    }
}


?>
</ul>