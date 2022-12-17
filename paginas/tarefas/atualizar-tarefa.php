<h2>Atualizar Tarefa</h2>
<?php
$codigoTarefa = $_POST["codigoTarefa"];
$tituloTarefa = $_POST["tituloTarefa"];
$descricaoTarefa = $_POST["descricaoTarefa"];
$dataInicioTarefa = $_POST["dataInicioTarefa"];
$dataConclusaoTarefa = $_POST["dataConclusaoTarefa"];
$statusTarefa = $_POST["statusTarefa"];

$sql = "UPDATE tbtarefas SET 
tituloTarefa = '{$tituloTarefa}',
descricaoTarefa = '{$descricaoTarefa}',
dataInicioTarefa = '{$dataInicioTarefa}',
dataConclusaoTarefa = '{$dataConclusaoTarefa}', 
statusTarefa = '{$statusTarefa}' 
WHERE codigoTarefa = '{$codigoTarefa}'
";
$rs = mysqli_query($conexao,$sql);
if($rs){
    echo "<p>Registro atualizado com sucesso!</p>";
}else{
    echo "<p>Não foi possível atualizar o registro.</p>";
}


?>