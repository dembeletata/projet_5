<?php

function afficheImage($id) {
   
    include('include/connexionBDD.php');
    $requet = "SELECT id, img FROM image WHERE id = $id";
    $result = $bdd->query($requet);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $id = $row['id'];
        $contenuImage = $row['img'];
        
  $html = '<img src="data:image/jpeg;base64,' . base64_encode($contenuImage) . '" alt="Image ' . $id . '" >';

     
        $bdd->close();

        return $html;
    } else {
       
        $bdd->close();
        
        return "Aucune image  trouvée!";
    }
}

function afficheSite($nom_site) {
   
    $bdd = new mysqli('localhost', 'root', '', 'tourisme_bf');

    if ($bdd->connect_error) {
        die("La connexion à la base de données a échoué : " . $bdd->connect_error);
    }
$requet = "SELECT site FROM site WHERE nom_site = '$nom_site'";
    $result = $bdd->query($requet);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $contenuSite = $row['site'];
        
  $html = '<img src="data:image/jpeg;base64,' . base64_encode($contenuSite) . '" alt="Image" >';

     
        $bdd->close();

        return $html;
    } else {
       
        $bdd->close();
        
        return "Aucune image  trouvée!";
    }
}

function afficheTexte($nomTexte) {
   
    $bdd = new mysqli('localhost', 'root', '', 'tourisme_bf');

    if ($bdd->connect_error) {
        die("La connexion à la base de données a échoué : " . $bdd->connect_error);
    }

    $nomTexte = $bdd->real_escape_string($nomTexte);


    $requete = "SELECT contenuTexte FROM texte WHERE nomTexte = '$nomTexte' ";
    $result = $bdd->query($requete);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $contenuT = $row['contenuTexte'];

      
        echo  $contenuT;
    } else {
        echo "Aucun texte trouvé dans la base de données pour le nom spécifié.";
    }

   
    $bdd->close();
}


function afficheville($nomVille) {
   
    $bdd = new mysqli('localhost', 'root', '', 'tourisme_bf');

    if ($bdd->connect_error) {
        die("La connexion à la base de données a échoué : " . $bdd->connect_error);
    }

    $nomVille = $bdd->real_escape_string($nomVille);


    $requete = "SELECT nom_ville FROM ville WHERE nom_ville = '$nomVille' ";
    $result = $bdd->query($requete);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $contenuT = $row['nom_ville'];

      
        echo  $contenuT;
    } else {
        echo "Aucun texte trouvé dans la base de données pour le nom spécifié.";
    }

   
    $bdd->close();
}

?>





