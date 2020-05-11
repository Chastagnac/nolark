<!DOCTYPE html>
<!-- 
     Page web créé dans le cadre du cours de web Dev le 01/09/2018
     Auteur : José GIL
     Email : jgil83000@gmail.com
-->
<?php
include('../includes/conexiondb.php');
?>
<html lang="fr-FR">
    <head>
        <title>Casques Nolark : Sécurité et confort, nos priorités !</title>
        <meta charset="UTF-8">
        <meta name="author" content="José GIL">
        <meta name="description" content="Découvrez des casques moto dépassant même les exigences des tests de sécurité. Tous les casques Nolark au meilleur prix et avec en prime la livraison gratuite !">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/styles.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="../favicon.ico">
    </head>
    <body>
        <?php
        include('../includes/header.html.inc.php');
        ?>     

        <form method ="post" actiion ="register.php">
            <?php
            include('../includes/errors.php');
            ?>   
            <div class="header">
                <h2>S'enregistrer</h2>
            </div>
            <div class ="input-group">
                <label>Nom d'utilisateur</label>
                <input type ="text" name="nom d'utilisateur">
            </div>
            <div class ="input-group">
                <label>Email</label>
                <input type ="text" name="email">
            </div>
            <div class ="input-group">
                <label>Mot de passe</label>
                <input type ="password" name="password_1">
            </div>
            <div class ="input-group">
                <label>Comfimez le Mot de passe</label>
                <input type ="password" name="password_2">
            </div>
            <br>
            <div class ="input-group">
                <button type="submit" name ="register" class="btn">S'inscrire</button>
            </div> 
        </form>
    </div>
</body>
</html>
