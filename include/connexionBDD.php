<?php
    try
    {
        $bdd=new PDO('mysql:host=localhost;dbname=tourisme_bf','root','');
    }
    catch(Exception $e)
    {
        die("Erreur :" .$e->getMessage());
    }