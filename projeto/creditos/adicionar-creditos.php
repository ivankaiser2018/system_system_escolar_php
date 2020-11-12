
<?php










require '../conexoes.php';

if (isset($_POST['tipo'])&& empty($_POST['tipo'])==false) {
    //pegando informações que usuario digitou no campo
    $tipo= addslashes($_POST['tipo']);
     $quantidade= addslashes($_POST['quantidade']);
      $aluno= addslashes($_POST['aluno']);
      
    
      //CHAMAR O BANCO DE DADOS PARA INSERIR ESSAS INFORMAÇÕES
          //executar a inserção no banco
     $sql="insert into creditos set tipo='$tipo',quantidade='$quantidade',aluno='$aluno'" ;
     $sql=$pdo->query($sql);
     
     
     //VOLTANDO PARA PAGINA PRINCIPAL
     
     header("Location: creditos.php");
 
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
    
    Novo Crédito :</br>
    </br>

   <label> Tipo: <input type="text" name="tipo"/></label></br></br>
    
 
  <label> Quantidade: <input type="number" name="quantidade"/></label></br></br>

   
   <label>Aluno:<input type="text" name="aluno"/></label></br></br>
     
     
     
     <input type="submit" value="Cadastrar"/>
     
    
</form>
    
