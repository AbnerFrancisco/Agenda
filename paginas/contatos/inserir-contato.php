<h2>Inserir Contato</h2>
<?php
$nomeContato = $_POST["nomeContato"];
$emailContato = $_POST["emailContato"];
$telefoneContato = $_POST["telefoneContato"];
$dataNascContato = $_POST["dataNascContato"];

$sql = "INSERT INTO tbcontatos 
(
nomeContato,
emailContato,
telefoneContato,
dataNascContato
) 
VALUES 
(
'{$nomeContato}',
'{$emailContato}',
'{$telefoneContato}',
'{$dataNascContato}'
)";

$rs = mysqli_query($conexao,$sql);

if($rs){
    echo "<p>Registro adicionado com sucesso!</p>";
}else{
    echo "<p>Não foi possivel adicionar o registro!</p>";
}

?>