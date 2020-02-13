<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Assistencia técnica </title>
        <meta charset="UTF-8">
        <link href="index.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
        $user= $_POST['login'];
        ?>

        <header>
        <h1> Assistencia Técnica </h1>
        </header>
        </br>
        </br>
        <nav id="menu">
    <ul id="titulo">
        
        <li><a href="vendas.php#tua" target="janela">Cadastro</a></li>  
        <li><a href="#">Venda</a></li>
        <li><a href="#">Relatorio</a></li>
        <li><a href="#">Fornecedor</a></li>
        <li id="user"> <h5> </h5><?php echo $user;?></li>
    </ul>
</nav>
        </br>
        <section>
           
            
            
        </section>
    </body>
</html>
