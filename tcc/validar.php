<?php

	//chamando a conexão com o banco de dados
	include "banco.php";
	
	//recebendo variáveis por POST
	
	$usuario = $_GET['login'];
	$senha = $_GET['senha'];
	
	//criand uma consulta
	
	$conexao = "select * from usuarios where login = '$usuario' and senha = '$senha' "; 
        

	$consulta = $conexao->query($conexao);
	
	if($consulta->num_rows > 0){
	  header('location: principal.php?login=ok');
  
    }else{
	  header('location: index.php?login=erro');
    }
	
?>