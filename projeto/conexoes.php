<?php

$dsn="mysql:dbname=sistema_alunos;host=localhost";
$user="root";
$password="";


try {
    $pdo=new PDO($dsn, $user, $password);
 
    
} catch (PDOException $error) {
    echo 'Erro Ao Conectar com o Banco'.$error->getMessage();
    
}




















?>