
<html>
<head>
    <meta charset="UTF-8">
    <title> Login de Usuário </title>
    <link href="login.css" rel="stylesheet" type="text/css">
</head>
<body>
    <span>    
<center>
    <form method="POST" action="validar.php">
        <h1> Área de Login </h1>
 
<form>
<input type="radio" name="user" value="client"> Cliente 
<input type="radio" name="user" value="server"> Empresa  
<div style="border: 1px solid white;"> </div>


<label>Login:</label>
    <input type="text" name="login" id="login">
<br>
<label>Senha:</label><input type="password" name="senha" id="senha"><br>
    <input type="submit" value="entrar" id="entrar" name="entrar"><br>
</form>

</center>
</span>
</body>
</html>
