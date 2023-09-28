<?php
    
    
    session_set_cookie_params(60);
    
    session_start();
    if( !isset($_SESSION['id_user']) || empty($_SESSION['id_user'])){

        header("location:connexion.php");
        exit;

    }
    else{
    
    } 
    



    include("traitement.php");
?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="hero">
    <?php include("header.php")?>

        <div class="image">
            <h1>BIENVENUE AU BURKINA FASO</h1>
            <h2>Terre d'acceiul et de tradition</h2>
            <form action="deconnection.php" method="POST">
            <input type="submit" name="submit" value="Se déconnecter" class="submit">
        </form>
        </div>
        
        <style>
        </style>
    </div>
    <div class="contenaire">
        <section class="section0">
            <h1>Destination</h1>
            <div>
                <button><a href="ouaga.php"><?php afficheville("OUAGADOUGOU") ?> </a></button>
                <button><a href="bobo.php"><?php afficheville("BOBO-DIOULASSO") ?></a></button>
                <button><a href="banfora.php"><?php afficheville("BANFORA") ?></a></button>
            </div>
        </section>

        <section class="section1">

        <div class="texte"><?php afficheTexte("h1_section1");?> </div>
                
            <div class="">
                <div>
                     <?php echo afficheImage(3); ?>
                    <h1><?php afficheTexte("CROCODILES");?></h1> 
                    <p><?php afficheTexte("croco");?></p>
                </div>
                <div> 
                    <?php echo afficheImage(4); ?>  
                    <h1><?php afficheTexte("CASCADES");?></h1> 
                    <p><?php afficheTexte("cascade");?></p>
                </div>
                <div> 
                    <?php echo afficheImage(5); ?>  
                    <h1><?php afficheTexte("RUINE");?></h1> 
                    <p><?php afficheTexte("ruine");?></p>
                </div>
            </div>
        </section>

        <section class="section2">
        <?php echo afficheImage(6); ?>  
        <div>                    
            <h1><?php afficheTexte("MASQUES");?></h1> 
            <p><?php afficheTexte("masque");?></p>

        </div>
        </section>
        <br>
        <br>
        <br>
        <br>


        <section class="section2">
        <div>                    
            <h1><?php afficheTexte("PALAIS");?></h1> 
            <p><?php afficheTexte("palais");?></p>

        </div>
        <?php echo afficheImage(7); ?>  

        </section>






<?php include("fotter.php")?>

    </div>
</body>
</html>