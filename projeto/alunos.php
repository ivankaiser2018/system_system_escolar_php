

 

 <html>
     
     <head>
         <meta charset="utf-8"/>
         
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
     
 <body >
 <a href="index.php"> Pagina Inicial</a>
</br>
 <a href="adicionar.php"> Adicionar Novo Aluno</a>
 <table >
     <div class="container">
     <tr>
         <th> Nome</th>       
         <th> Email</th>
         <th> CPF</th>
         
         <th> Ações</th>       
         
         
         
         
     </tr>
     </div>
     </body>
     
 </html>
     <?php
     
     //INICIANDO A SESSÃO DA PÁGINA
     session_start();
 
 if (isset($_SESSION['id']) &&empty($_SESSION['id'])==false) {
     
     echo ' Area restrita';
     
 } else {
     header("Location:login.php");    
 }
     
     //FINALIZANDO A AREA DE SESSAO
     
     
     
     
     
     
     
     //chamando A Conexão
     include 'conexoes.php';
      $sql="SELECT *FROM alunos";
      $sql=$pdo->query($sql);
      
      //buscando usuarios da tabela do banco
      
      if ($sql->rowCount()>0) {
          //conta se há linhas no banco
         // echo 'Tem linhas no Banco';
          //EXIBINDO DADOS DO BANCO USANDO O FORECH E A FUNÇÃO FETCHALL
          
          foreach ($sql->fetchAll()as $usuarios) {
              
              echo '<tr>';
              
              
              echo '<td>'.$usuarios['nome'].'</td>';
              echo '<td>'.$usuarios['telefone'].'</td>';
              echo '<td>'.$usuarios['cpf'].'</td>';
             echo '<td><a href="editar.php?id='.$usuarios['id'].'">Editar</a> -<a href="excluir.php?id='.$usuarios['id'].'">Excluir</a>  </td>';
           
              echo '</tr>';
              
              
          }
          
          
          
          
          
      }else{
          
          
      }
      
     
     
     
     
     ?>
     
     
  
 </table>