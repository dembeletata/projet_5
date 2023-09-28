<?php

session_start();
session_destroy();
if( isset($_SESSION['id_user']) && !empty($_SESSION['id_user']) ){

   header("location:index.php");
   exit;

}else{
   
 } 



 @$nom=$_POST['nom'];
 @$prenom=$_POST['prenom'];
 @$email=$_POST['email'];
 @$code=$_POST['code'];
 @$submit=$_POST['submit'];
 @$erreur="";
 @$err="";

 include('include/connexionBDD.php');

if (isset($submit)) {

   
    
    if (empty($nom) || empty($prenom) || empty($email) || empty($code)) {

        $erreur="Veillez remplire tout les champs svp!";
          
    }
    else{
        $res=$bdd->query(" INSERT INTO user(nom, prenom, email, code) 
                            VALUES ('$nom','$prenom','$email','$code')");
        if ($res !== false) {
            header('location:index.php');
        }else{
            $err="echec d'enregistrement!";
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
        <button class="but"><a href="connexion.php">Se connecter</a></button>

        <h1>Inscription</h1>
        <form action="" method="POST">
            <input type="text" name="nom"  placeholder="Entrez votre nom">
            <input type="text" name="prenom" placeholder="Entrez votre prenom">
            <input type="email" name="email" placeholder="Entrez votre Email">
            <input type="password" name="code" placeholder="Entrez votre mot de passe">
            <input type="submit" value="VALIDER" name="submit" class="submit">

            <div><?php echo $err?></div>
            <div style="color: red;     font-family:Arial, sans-serif;"><?php echo $erreur?></div>
        </form>
        <img src="image/img4.png" alt="" width="200px" >
        
    </div>
</body>
</html>
