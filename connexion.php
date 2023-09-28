<?php

session_start();
if( isset($_SESSION['id_user']) && !empty($_SESSION['id_user']) ){

    header("location:index.php");
    exit;

}else{
      
 } 


 @$email=$_POST['email'];
 @$code=$_POST['code'];
 @$submit=$_POST['submit'];
 @$erreur="";
 @$err="";

 include('include/connexionBDD.php');

if (isset($submit)) {

    if (empty($email) || empty($code)) {

        $erreur="Veillez remplire tout les champs svp!";
          
    }
    else{
        $info_user = $bdd->query("SELECT *FROM user WHERE email='$email' ")->fetch();

        if($info_user !== false){

            if($info_user['code'] == $code){

                $_SESSION['id_user']=$info_user['id_user'];
                $_SESSION['login']= true;
                header('location:index.php');
            } else{
                $err="Mot de passe incorrecte!";
            }
        }else{ 
            $err="Email ou mot de passe incorrecte!";
        }
    }
}


?>



<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="inscription.css">
</head>
<body>
    <div class="contenaire">
        <button class="but"><a href="inscription.php">S'inscrire</a></button>

        <h1>Connexion</h1>
        <form action="" method="POST">
            <input type="email" name="email" placeholder="Entrez votre Email">
            <input type="password" name="code" placeholder="Entrez votre mot de passe">
            <input type="submit" value="Se connecter" name="submit" class="submit">

            <div style="color: red; font-family:Arial, sans-serif;"><?php echo $err ?></div>
            <div style="color: red; font-family:Arial, sans-serif;"><?php echo $erreur ?></div>
        </form>
        <img src="image/img4.png" alt="" width="200px" >
        
    </div>
</body>
</html>
