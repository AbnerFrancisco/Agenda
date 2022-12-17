<h2>Excluir Contato</h2>
<?php
$codigoContato = $_GET["codigoContato"];
$sql = "DELETE FROM tbcontatos WHERE codigoContato = {$codigoContato}";
$rs = mysqli_query($conexao,$sql);
if($rs){
    echo "<p>Registro excluido com sucesso!</p>";
}else{
    echo "<p>Não foi possível excluir o registro!</p>";
}
?>