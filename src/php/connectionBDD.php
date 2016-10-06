<?php
session_start();
    try{
    $bdd = new PDO('mysql:host=mysql.montpellier.epsi.fr:5206;dbname=Asap', 'antoine.porquet', 'epsi487QYT');
    }
    catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
    }
	?>