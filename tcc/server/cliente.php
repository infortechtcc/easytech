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
        <header>
        <h1> Assistencia Técnica </h1>
        
        </br>
        </br>
        <nav id="menu">
    <ul id="titulo">
        
        <li><a href="cadastro.php">CADASTROS</a></li>  
        <li><a href="consulta.php">CONSULTAS</a></li>
        <li><a href="../cliente.php">HOME</a></li>
        <li><a href="protocolos.php">PROTOCOLOS</a></li>
    </ul>
            <h5> <?php 
            include banco.php;
            echo $usuario;
            
            
            ?>
            </h5>
        </nav>
         </header>    
     
        </br>
       <div style="border: 1px solid brown">   </div>
       
        <section>
         
            <img src="logo.png">
            
        </section>
       
       <div>  </div>
       <footer border:1px> <h2> &reg Easy Tech by  </h2></footer>       
       
    </body>
</html>
