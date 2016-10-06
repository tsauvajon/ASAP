<?php
session_start();
    try{
	$bdd = new mysqli('mysql.montpellier.epsi.fr:5206', 'antoine.porquet', 'epsi487QYT', 'Asap');
    }
    catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
    }
?>
