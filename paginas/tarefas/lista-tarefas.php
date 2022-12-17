<?php
// -- paginação
$quantidade = 10;
$pagina = (isset($_GET["pagina"]))?(int)$_GET["pagina"]:1;
$inicio = ($quantidade*$pagina)-$quantidade;



// ---------



$txtPesquisa = (isset($_POST['txtPesquisa']))?$_POST['txtPesquisa']:"";
// -- marca Favorito -------------
$codigoTarefa = (isset($_GET['codigoTarefa']))?$_GET['codigoTarefa']:"";
$flagFavoritoTarefa = (isset($_GET['flagFavoritoTarefa']) && $_GET['flagFavoritoTarefa'] === "s")?"n":"s";

$sql = "UPDATE tbTarefa SET flagFavoritoTarefa = '{$flagFavoritoTarefa}' WHERE codigoTarefa = '{$codigoTarefa}'";

mysqli_query($conexao, $sql);












?>

<h1>Lista de Tarefas</h1>
<div>
    <a class="btn btn-primary mb-2" href="index.php?menuop=cadastrar-tarefa">Adicionar Tarefa</a>
</div>


<div class="mb-3">
    <form action="index.php?menuop=lista-tarefas" method="post">
 
        <div class="input-group">
        <label class="input-group-text" for="txtPesquisa">Pesquisar</label>
            <input class="form-control" type="search" name="txtPesquisa" id="txtPesquisa" value="<?=$txtPesquisa?>">
            <button class="btn btn-secondary" type="submit">
            <i class="bi bi-search"></i>
            </button>
        </div>
    </form>
</div>



<table class="table table-dark table-striped table-bordered border-warning">
    <thead>
        <tr>
            <th>Código</th>
            <th>Título</th>
            <th>Descrição</th>
            <th>Data de início</th>
            <th>Data de conclusão</th>
            <th>Status</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $sql = "SELECT codigoTarefa, tituloTarefa, descricaoTarefa, 
        DATE_FORMAT(dataInicioTarefa, '%d/%m/%Y') as dataInicioTarefaBr ,
        DATE_FORMAT(dataConclusaoTarefa, '%d/%m/%Y') as dataConclusaoTarefaBr,
        dataInicioTarefa,
        dataConclusaoTarefa,
        CASE
            WHEN statusTarefa = 'N' THEN 'Não Concluido'
            WHEN statusTarefa = 'S' THEN 'Concluido'
            ELSE 'Não especificado'
        END AS statusTarefa    
        FROM tbtarefas 
        WHERE 
        tituloTarefa LIKE '%{$txtPesquisa}%' 
        ORDER BY statusTarefa,dataInicioTarefa,dataConclusaoTarefa LIMIT $inicio, $quantidade";
        
        $rs = mysqli_query($conexao,$sql) or
        die("Erro ao executar a consulta. " . mysqli_error($conexao));
        while($dados = mysqli_fetch_assoc($rs)){
            if($dados['statusTarefa']==='Concluido'){
                $classBadge = "badge bg-success";
            }else{
                $classBadge = "badge bg-warning";
            }
        echo "
        <tr>
            <td> {$dados['codigoTarefa']} </td>
            <td>  {$dados['tituloTarefa']}  </td>
            <td>  {$dados['descricaoTarefa']}  </td>
            <td>  {$dados['dataInicioTarefaBr']}  </td>
            <td>  {$dados['dataConclusaoTarefaBr']}  </td>
            <td> <span class='{$classBadge}'>  {$dados['statusTarefa']} </span> </td>
            <td> <a class='btn btn-warning' href='index.php?menuop=editar-tarefa&codigoTarefa={$dados['codigoTarefa']}'>Editar</a>   </td>
            <td> <a class='btn btn-danger' href='index.php?menuop=excluir-tarefa&codigoTarefa={$dados['codigoTarefa']}'>Excluir</a>   </td>
        </tr>
        ";
    }
    ?>
    </tbody>
</table>
<ul class="pagination">
<?php
$sqlTotal = "select codigoTarefa from tbtarefas";
$rsTotal = mysqli_query($conexao,$sqlTotal);
$numTotal = mysqli_num_rows($rsTotal);
$totalPaginas = ceil($numTotal/$quantidade);

for($i=1;$i<=$totalPaginas;$i++){
    if($i==$pagina){
        echo "<li class='page-item active'><a class='page-link' href='?menuop=lista-tarefas&pagina=$i'>$i</a> </li>";
    }else{
        echo "<li class='page-item'><a class='page-link' href='?menuop=lista-tarefas&pagina=$i'>$i</a> ";
    }
}
    ?>
</ul>