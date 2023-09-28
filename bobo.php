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
    <link rel="stylesheet" href="ville.css">
</head>
<body>
    <div class="cont">
        <?php include("header.php")?>
        <div class="cont1">
        <?php echo afficheSite("mosque"); ?>
        <div class="tete">
        <h1>BIENVENUE <br>à Bobo-Dioulasso</h1>
        </div>
        <div class="cont2">
            <div>
                <div>
                    <h1><?php afficheTexte("sindou");?></h1>
                    <p><?php afficheTexte("sindou2");?></p>
                </div>
                <?php echo afficheSite("sindou"); ?>
                <?php echo afficheSite("sindou2"); ?>
            </div>
            <div>
                <?php echo afficheSite("ruine"); ?>
                <?php echo afficheSite("ruine2"); ?>
                <div>
                    <h1><?php afficheTexte("cineastes");?></h1>
                    <p><?php afficheTexte("cineastes2");?></p>
                </div>                
                
            </div>
            <div>
                <div>
                    <h1><?php afficheTexte("martyrs");?></h1>
                    <p><?php afficheTexte("martyrs2");?></p>
                </div>                
                <?php echo afficheSite("liberte"); ?>
                <?php echo afficheSite("liberte2"); ?>
            </div>

        </div>
        <section>
            <div>
                <h1><?php afficheTexte("divertissement");?></h1>
                <div>
                    <div><?php echo afficheSite("divers1"); ?> <h2><?php afficheTexte("divertissement2");?></h2></div>
                    <div><?php echo afficheSite("divers2"); ?> <h2><?php afficheTexte("divertissement2");?></h2></div>
                    <div><?php echo afficheSite("divers3"); ?> <h2><?php afficheTexte("divertissement2");?></h2></div>
                </div>
            </div>
            <div>
                <h1><?php afficheTexte("logement");?></h1>
                <div>
                    <div><?php echo afficheSite("loge1"); ?> <h2><?php afficheTexte("divertissement2");?></h2></div>
                    <div><?php echo afficheSite("loge2"); ?> <h2><?php afficheTexte("divertissement2");?></h2></div>
                    <div><?php echo afficheSite("loge3"); ?> <h2><?php afficheTexte("divertissement2");?></h2></div>
                </div>
            </div>
        </section>
        

    </div>
    <?php include("fotter.php")?>
</body>
</html>