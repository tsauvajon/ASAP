<?php
session_start();
    function connectionBDD()
	{
	 return new mysqli('mysql.montpellier.epsi.fr', 'antoine.porquet', 'epsi487QYT', 'Asap', 3306);
	}
?>
