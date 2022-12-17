<?php
include("./db/conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Sistema Agenda</title>
</head>
<body class="bg-dark">
   <header class="container-fluid bg-warning">
       <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-waring">
                
                <a class="navbar-brand" href="index.php">Sistema Agenda</a>  
                <button 
                class="navbar-toggler" 
                type="button" 
                data-bs-toggle="collapse" 
                data-bs-target="#navbarNav" 
                aria-controls="navbarNav" 
                aria-expanded="false" 
                aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="?menuop=lista-contatos">Contatos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?menuop=lista-tarefas">Tarefas</a> 
                        </li>
                    </ul>
                </div>

            
                
            </nav>
        </div>
   </header> 
   <main class="container-fluid  text-light">
       <div class="container">
        
       <?php
       if(isset($_GET["menuop"])){
        $menuop = $_GET["menuop"];
       }else{
           $menuop= "";
       }
              switch ($menuop) {
                case 'lista-contatos':
                    include("./paginas/contatos/lista-contatos.php");
                    break;
                case 'editar-contato':
                    include("./paginas/contatos/editar-contato.php");
                    break;    
                case 'excluir-contato':
                    include("./paginas/contatos/excluir-contato.php");
                    break;    
                case 'cadastrar-contato':
                    include("./paginas/contatos/cadastrar-contato.php");
                    break;    
                case 'inserir-contato':
                    include("./paginas/contatos/inserir-contato.php");
                    break;    
                case 'atualizar-contato':
                    include("./paginas/contatos/atualizar-contato.php");
                    break;    
                case 'lista-tarefas':
                    include("./paginas/tarefas/lista-tarefas.php");
                    break;
                case 'excluir-tarefa':
                    include("./paginas/tarefas/excluir-tarefa.php");
                    break;
                case 'editar-tarefa':
                    include("./paginas/tarefas/editar-tarefa.php");
                    break;
                case 'cadastrar-tarefa':
                    include("./paginas/tarefas/cadastrar-tarefa.php");
                    break;
                case 'inserir-tarefa':
                    include("./paginas/tarefas/inserir-tarefa.php");
                    break;
                case 'atualizar-tarefa':
                    include("./paginas/tarefas/atualizar-tarefa.php");
                    break;
                default:
                    include("./paginas/home/home.php");
                    break;
            }
       ?>
          
          </div>
   </main>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>