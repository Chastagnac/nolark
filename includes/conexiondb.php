
<?php

session_start();
$username;
$captcha;
$email;
$errors = array();

//Permet de se connecter
$db = mysqli_connect('localhost', 'root', '', 'nolark');


if (isset($_POST['register'])) { //Détermine si une variable est déclarée et est différente de NULL
    $username = ($_POST['username']);
    $email = ($_POST['email']);
    $password_1 = ($_POST['password_1']);
    $password_2 = ($_POST['password_2']);
    $captcha = ($_POST['captcha']);
    // Protège une commande SQL de la présence de caractères spéciaux
    //array_push — Empile un ou plusieurs éléments à la fin d'un tableau
    if (empty($username)) {
        array_push($errors, "Le nom d'utilisateur doit être rempli");
    }
    if (empty($email)) {
        array_push($errors, "L'email doit être rempli");
    }
    if (empty($password_1)) {//Détermine si une variable est vide
        array_push($errors, "Le mot de passe doit être rempli");
    }
    if ($password_1 !== $password_2) {//Détermine si une variable est vide
        array_push($errors, "Les mots de passe doivent être identiques");
    }
    if ($captcha !== "16") {
        array_push($errors, "Veuillez saisir le bon captcha");
    }

    if (count($errors) == 0) {
        $password = md5($password_1);
        $sql = "INSERT INTO loginform (USERNAME, EMAIL, PASSWORD) 
                 VALUES ('$username', '$email', '$password')";
        mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "Vous êtes bien connecté !";
        header('location: ../index.php');
    }
}
if (isset($_POST['login'])) {
    $username = ($_POST['username']);
    $password = ($_POST['password']);

    if (empty($username)) {
        array_push($errors, "Le nom d'utilisateur est nécessaire");
    }
    if (empty($password)) {
        array_push($errors, "Le mot de passe est obligatoire .. ");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $sql = "SELECT * FROM loginform WHERE USERNAME ='$username' AND PASSWORD ='$password'";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "Vous êtes bien connecté !";
            header('location: ../index.php');
        }
    } else {
        array_push($errors, "Mauvais mot de passe/nom d'utilisateur");
        header('location: login.php');
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header('location : login.php');
}

    
