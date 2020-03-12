<?php

//chamando a conexão com o banco de dados
include 'banco.php';

//recebendo variáveis por POST

$funcao = $_POST['user'];
$usuario = $_POST['login'];
$senha = $_POST['senha'];

//criand uma consulta


if ($funcao == 'client') {
    $sql = "select * from cliente where user = '$usuario' and senha = '$senha' ";
    $consulta = $conexao->query($sql);

    if ($consulta->num_rows > 0) {

        header('location:principal.php?login=ok');
    } else {
        header('location: index.php?login=erro');
    }
} else{

 
    $sql = "select * from usuarios where login = '$usuario' and senha = '$senha' ";
    $consulta = $conexao->query($sql);

    if ($consulta->num_rows > 0) {
        header('location:cliente.php');
    } else {
        header('location: index.php?login=erro');
    }
}
    
    
?>