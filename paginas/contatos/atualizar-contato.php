<h2>Atualizar Contato</h2>
<?php
$codigoContato = $_POST["codigoContato"];
$nomeContato = $_POST["nomeContato"];
$emailContato = $_POST["emailContato"];
$telefoneContato = $_POST["telefoneContato"];
$dataNascContato = $_POST["dataNascContato"];

$sql = "UPDATE tbcontatos SET 
nomeContato = '{$nomeContato}',
emailContato = '{$emailContato}',
telefoneContato = '{$telefoneContato}',
dataNascContato = '{$dataNascContato}' 
WHERE codigoContato = '{$codigoContato}'
";

$rs = mysqli_query($conexao,$sql);

if($rs){
    echo "<p>Registro atualizado com sucesso! </p>";
}else{
    echo "<p>Não foi possível atualizar o registro. Erro: " . mysqli_error($conexao);
}
?>