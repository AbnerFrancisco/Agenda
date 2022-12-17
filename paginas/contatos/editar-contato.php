<h2>Editar Contato</h2>
<div>
<?php
$codigoContato = $_GET["codigoContato"];

$sql = "SELECT 
codigoContato,
nomeContato,
emailContato,
telefoneContato,
dataNascContato,
nomeFotoContato 
 FROM tbcontatos
 WHERE codigoContato = '{$codigoContato}'
 ";

 $rs = mysqli_query($conexao,$sql);
 $dados = mysqli_fetch_assoc($rs);
?>


    <form action="index.php?menuop=atualizar-contato" method="post">
        <div class="mb-3 col-md-3">
            <label class="form-label" for="codigoContato">Código</label>
            <input class="form-control" type="text" name="codigoContato" id="codigoContato" value="<?=$dados['codigoContato']?>">
        </div>
        <div class="mb-3 col-md-6">
            <label class="form-label" for="nomeContato">Nome</label>
            <input class="form-control" type="text" name="nomeContato" id="nomeContato" value="<?=$dados['nomeContato']?>">
        </div>
        <div class="mb-3 col-md-6">
            <label class="form-label" for="emailContato">E-mail</label>
            <input class="form-control" type="email" name="emailContato" id="emailContato" value="<?=$dados['emailContato']?>">
        </div>
        <div class="row">
            <div class="mb-3 col-md-2">
                <label class="form-label" for="telefoneContato">Telefone</label>
                <input class="form-control" type="text" name="telefoneContato" id="telefoneContato" value="<?=$dados['telefoneContato']?>">
            </div>
            <div class="mb-3 col-md-2">
                <label class="form-label" for="dataNascContato">Data de Nascimento</label>
                <input class="form-control" type="date" name="dataNascContato" id="dataNascContato" value="<?=$dados['dataNascContato']?>">
            </div>
        </div>
        <div class="mb-3">
            <input class="btn btn-success" type="submit" value="Atualizar">
        </div>
    </form>
    <div>
    <?php
            
            if(empty($dados['nomeFotoContato'])){
             
             $nomeFoto = "avatar.png";
            }else{
     
               $filename = "./paginas/contatos/fotos-contatos/" . $dados['nomeFotoContato'];
               if(file_exists($filename)){
                 $nomeFoto = $dados['nomeFotoContato'];
               }else{
                 $nomeFoto = "avatar.png";
               }
            }
            ?>
                 <img width="200" src="./paginas/contatos/fotos-contatos/<?=$nomeFoto?>" alt="Foto do contato">
    </div>
</div>