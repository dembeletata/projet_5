<?php
    include("traitement.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="service.css">
</head>
<body>
    <div class="cont">
        <?php include("header.php")?>
        <section class="section1">
            <h1><?php afficheTexte("site");?></h1> 
            <?php echo afficheImage(12); ?> 
            <div>
            <?php echo afficheImage(10); ?>  
            <?php echo afficheImage(9); ?>  
            <?php echo afficheImage(11); ?> 
            <?php echo afficheImage(8); ?> 
            <?php echo afficheImage(13); ?>  
             
            </div>
        </section>
        <?php include("fotter.php")?>

    </div>

</body>
</html>