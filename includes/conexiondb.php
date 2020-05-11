
<?php 

    $username = "";
    $email = "";
    $errors = array();
            
    $db = mysqli_connect('localhost','root', '', 'nolark');


   if(isset($_POST['register'])){

       $username = mysql_real_escape_string($_POST['username']);
       $email = mysql_real_escape_string($_POST['email']);
       $password_1 = mysql_real_escape_string($_POST['password_1']);
       $password_2 = mysql_real_escape_string($_POST['password_2']);
       // Protège une commande SQL de la présence de caractères spéciaux
   }
   
   
    //array_push — Empile un ou plusieurs éléments à la fin d'un tableau
    if (empty($username)){
        array_push($errors, "Le nom d'utilisateur doit être rempli");        
    }
    if (empty($email)){
        array_push($errors, "L'email doit être rempli");        
    }
    if (empty($password_1)){//Détermine si une variable est vide
        array_push($errors, "Le mot de passe doit être rempli");        
    }
    
    if (count($errors) == 0){
        $password = md5($password_1);
        $sql = "INSERT INTO loginform (USERNAME, EMAIL, PASSWORD) 
                 VALUES ('$username', '$email', '$password')";
        mysqli_query($db, $sql);
    }
    
