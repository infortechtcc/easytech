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

        <style>
            h2#sub_super{
                text-align: center;
                font-size: 25pt;
                color: red;
                position: relative;
                top: 50px;
            }
            
            
        </style>
    
    
    </head>
    
    <body>
        <header>
        <h1> Assistencia Técnica </h1>
        
        </br>
        </br>
     
         </header>    
     
        </br>
 
       
        <section>
         
            <h2 id="sub_super"> Olá Super </h2>
            <p> Você acabou de entrar no super usuario</p>
            <p> Escolha as suas em qual segmento vc gostaria de acessar</p>
            <form method="post" action="super.php">
                
               <input type="radio" name="tipo" value="Ciente"> 
                   <label> Cliente </label>             
               <input type="radio" name="tipo" value="Empresa">   
                   <label>Empresa </label>
                   
               <input id="botao" type="submit" value="Enviar">
                
            </form>

            <?php
            
            $tipo = $_POST['tipo'];
            
            if($tipo =='cliente'){
                 header('location:principal.php');
            }  else {
             header('location:cliente.php');    
            }
            
            
            
            ?>
            
            
        </section>
       
       <div>  </div>
       <footer border:1px> <h2> &reg Easy Tech by  </h2></footer>       
       
    </body>
</html>


