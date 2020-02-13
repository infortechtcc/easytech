<?php
  
  //variáveis de conexão com o banco de dados
  $hostname = "localhost";
  $user = "root";
  $password = "infortech";
  $database = "tcc";
  
  $conexao = new mysqli($hostname,$user,$password,$database);
  
  if(mysqli_connect_errno()) trigger_error(mysqli_connect_error());
  echo mysqli_connect_error();

?>