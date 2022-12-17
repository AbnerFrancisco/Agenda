<h2>Inserir Tarefa</h2>
<?php
    $tituloTarefa = strip_tags(mysqli_real_escape_string($conexao,$_POST["tituloTarefa"]));
    $descricaoTarefa = $_POST["descricaoTarefa"];
    $dataInicioTarefa = $_POST["dataInicioTarefa"];

    $sql = "INSERT INTO tbtarefas 
    (
    tituloTarefa,
    descricaoTarefa,
    dataInicioTarefa
    )
    VALUES(
    '{$tituloTarefa}',
    '{$descricaoTarefa}',
    '{$dataInicioTarefa}'
    )";

    $rs = mysqli_query($conexao, $sql) or die("Erro ao executar a consulta. Error: " . mysqli_error($conexao));

    if($rs){
        echo "<p>Registro inserido com sucesso!</p>";
    }else{
        echo "<p>Não foi possível inserir o registro.";
    }

?>