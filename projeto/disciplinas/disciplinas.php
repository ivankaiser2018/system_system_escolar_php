

 

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
 <a href="../index.php"> Pagina Inicial</a>
</br>
 <a href="adicionar-disciplina.php"> Adicionar Nova Disciplina</a>
 <table >
     <div class="container">
     <tr>
         <th> Nome</th>       

         
         <th> Ações</th>       
         
         
         
         
     </tr>
     </div>
     </body>
     
 </html>
     <?php
     
     
     
     
     
     
     
     //chamando A Conexão
     include '../conexoes.php';
      $sql="SELECT *FROM disciplinas";
      $sql=$pdo->query($sql);
      
      //buscando usuarios da tabela do banco
      
      if ($sql->rowCount()>0) {
          //conta se há linhas no banco
         // echo 'Tem linhas no Banco';
          //EXIBINDO DADOS DO BANCO USANDO O FORECH E A FUNÇÃO FETCHALL
          
          foreach ($sql->fetchAll()as $disciplinas) {
              
              echo '<tr>';
              
              
              echo '<td>'.$disciplinas['nome'].'</td>';
              
             echo '<td><a href="editar.php?id='.$disciplinas['id'].'">Editar</a> -<a href="excluir.php?id='.$disciplinas['id'].'">Excluir</a>  </td>';
           
              echo '</tr>';
              
              
          }
          
          
          
          
          
      }else{
          
          
      }
      
     
     
     
     
     ?>
     
     
  
 </table>