<?php 

require 'base.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="idd.css">
</head>
<body>
    
<form class="form" method="POST" action="twitter.php">
        <input type="text" name="id" placeholder="Identifiants">
        <input type="password" name="mdp" placeholder="Mot de passe">
        <input type="email" name="mail" placeholder="E-mail">
        
        <button type="submit">Inscription</button>
    </form>

<hr>

    <form class="form" method="POST" action="twitter.php"> 
        <input type="text" name="id" placeholder="Identifiants / E-mail">
        <input type="password" name="mdp" placeholder="Mot de passe">
        
        
        <button type="submit">Connexion</button>
</form>

</body>
</html>

