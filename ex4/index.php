<?php
    print_r($_POST);
?>

<form method="post">
    <input type="text" name="username" id="username" minlength="3" maxlength="10" placeholder="Nom d'utilisateur">
    <input type="email" name="email" id="email" placeholder="Adresse Email">
    <input type="password" name="password" id="password" placeholder="Mot de passe">
    <input type="submit" value="Connexion">
</form>