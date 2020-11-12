<?php


require '../conexoes.php';
$id=0;
// pegando por id do usuario ,usando GET
if (isset($_GET['id'])&&empty($_GET['id'])==false) {
    
    $id= addslashes($_GET['id']);
}


// ATUALIZANDO OS DADOS  
if (isset($_POST['tipo'])&&empty($_POST['tipo'])==false) {
    $tipo= addslashes($_POST['tipo']);
     $quantidade= addslashes($_POST['quantidade']);
      $aluno= addslashes($_POST['aluno']);

   
    $sql="update creditos set tipo='$tipo',quantidade='$quantidade' ,aluno='$aluno'  where id='$id'";
    $sql=$pdo->query($sql);
    
      header("Location: creditos.php");
    
}  
      
    $sql="select *from creditos where id='$id'";
    $sql=$pdo->query($sql);
    //pegando um dado do banco pelo id para editar
    if ($sql->rowCount()>0) {
        // pegando informação apenas de um id fetch(busca apenas de uma linha)
        $dado=$sql->fetch();
        
    } else {
              header("Location: creditos.php");
        
    }
    
 
   // pegando os dados do banco para poder editar as informações
    //pegando o ID do usuario
    
    //CHAMANDO SQL



    


?>

<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="./CSS/arquivo_editar.css">


  <style>
          body {
  
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
   background-color: lightblue;
}
.container{
        
}


table{
  
    

   border-collapse: collapse;
    
    width: 100%;
    
}

 th, td {
     font-style:oblique;
  
 border: 1px solid black;
  padding: 4px;
  text-align: left;
}   
     </style>
</head>
<body>

<form method="POST">
    
    Nome:</br>
  
    
   <label> Tipo: <input type="text" name="tipo"/></label></br></br>
    
 
  <label> Quantidade: <input type="number" name="quantidade"/></label></br></br>

   
   <label>Aluno:<input type="text" name="aluno"/></label></br></br>
     
     
     <input type="submit" value="Atualizar"/>
     
    
</form>
    
    
    
    
    </body>
    </html>