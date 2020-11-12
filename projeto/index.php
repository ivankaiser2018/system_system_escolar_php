<?php
    
    //INICIANDO A SESSÃO DA PÁGINA
    session_start();

if (isset($_SESSION['id']) &&empty($_SESSION['id'])==false) {
    
    echo ' Area restrita';
    
} else {
    header("Location:login.php");    
}
    
    //FINALIZANDO A AREA DE SESSAO
    
?>


<html>
    <head>
    <meta charset="UTF-8">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/bootstrap.css" rel="stylesheet">
        <title>Cadastro de alunos</title>
        <style type="text/css">
            body {
                margin-top: 100px;
                margin-right: 20px;
                margin-left: 20px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Gerenciamento de alunos</a>
                </div>
                <div id="navbar">
                    <ul class="nav navbar-nav navbar-left">
                        <li><a class="active" href="index.php">Início</a></li>
                        <li><a href="alunos.php">Buscar Alunos</a></li>
                        <li><a href="./cursos/cursos.php">Cursos</a></li>
                        <li><a href="./disciplinas/disciplinas.php">Disciplinas</a></li>
                        <li><a href="./creditos/creditos.php">Inserir Créditos</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
    </body>

</html>