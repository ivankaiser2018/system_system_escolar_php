
<?php










require '../conexoes.php';

if (isset($_POST['nome'])&& empty($_POST['nome'])==false) {
    //pegando informações que usuario digitou no campo
    $nome= addslashes($_POST['nome']);
    
      //CHAMAR O BANCO DE DADOS PARA INSERIR ESSAS INFORMAÇÕES
          //executar a inserção no banco
     $sql="insert into disciplinas set nome='$nome'" ;
     $sql=$pdo->query($sql);
     
     
     //VOLTANDO PARA PAGINA PRINCIPAL
     
     header("Location: disciplinas.php");
 
} 

     
    



?>




    
     <head>
      
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

<form method="POST">
    
    Nova Disciplina :</br>
    <input type="text" name="nome"/></br></br>
    
    
     
     
     
     <input type="submit" value="Cadastrar"/>
     
    
</form>
    
