<h2>Excluir Tarefa</h2>
<?php
$codigoTarefa = $_GET["codigoTarefa"];
$sql = "DELETE FROM tbtarefas WHERE codigoTarefa = '{$codigoTarefa}'";

$rs = mysqli_query($conexao,$sql) or die("Não foi possivel executar a consulta."
. mysqli_error($conexao));

if($rs){
    echo "<p>Registro excluido com sucesso!</p>";
}else{
    echo "<p>Não foi possível excluir o registro!</p>";
}
?>