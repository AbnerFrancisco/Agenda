<?php
define("SERVIDOR","ftp.marcosdemelo.com");
define("USUARIO","marcosde_alunos");
define("SENHA","alunosLF");
define("BANCO","marcosde_dbagenda");

$conexao = mysqli_connect(SERVIDOR,USUARIO,SENHA,BANCO)
or die("Não foi possível conectar ao servidor. Erro: " 
. mysqli_connect_error());

?>