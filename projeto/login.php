<?php
     
//RECEBENDO DADOS QUE USUARIO DIGITOU

//abrindo uma sessão

session_start();

//verificando se usuario enviou algum dado(  ISSET(significa setou algum dado))

if (isset($_POST['nome'])&&empty($_POST['nome'])==false) {
    $email= addslashes($_POST['nome']);
    $senha= md5(addslashes($_POST['senha']));
    
    
    
    //CRIANDO CONEXÃO COM BANCO 
$dsn="mysql:dbname=sistema_alunos;host=localhost";
$user="root";
$password="";

    
   
    try {
        
        $db=new PDO($dsn, $user,$password);
   
        
          // verificando se esses dados estão no banco de dado
  $nome='teste';
  $senha='12345';
 $sql="SELECT *FROM usuarios WHERE nome='$nome' AND senha='$senha' ";
     $sql=$db->query($sql);
   
   // vericando se os dados que usuario digitou está cadastrado no banco
   if ($sql->rowCount() >0) {
       

       //pegando primeiro resultado usando O FETCh
       $dado=$sql->fetch();
       
      
       
        //SALVAR ESSES DADOS NA MINHA SESSÃO 
       
     $_SESSION['id']=$dado['id'];
     
     // redirecionando para pagina principal
         header("Location: index.php");
       
   } else {
       'Usuario não está cadastrado';
   }
        
        
        
    } catch (PDOException $error) {
        echo 'Usuario Não cadastrado'.$error->getMessage();
    }

    
    
    
    
    
    
} 


    





?>







<body>

 <head>

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<style>
	.login-form {
		width: 340px;
    	margin: 50px auto;
	}
    .login-form form {
    	margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }
    .login-form h2 {
        margin: 0 0 15px;
    }
    .form-control, .btn {
        min-height: 38px;
        border-radius: 2px;
    }
    .btn {        
        font-size: 15px;
        font-weight: bold;
    }
</style>     

</head>
    
<div class="login-form">
    <form  method="post">
        <h2 class="text-center">Login</h2>       
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Username" name="nome" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="senha" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" value="Enviar">Login</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
           
        </div>        
    </form>
   
    


     
     
    

</body>