<?php	
	include_once "connectionBDD.php";
?>      
<?php
function creerCours($debut, $fin, $intitule, $description){
	$bdd = connectionBDD();
	$query = "CALL CreerCours('" . $debut . "', '" . $fin . "', '" . $intitule . "', '" . $description . "')";
	$res = $bdd->query($query);
	
	if ($res->num_rows)
	{
		$res->data_seek($row_no);
		return json_encode($res->fetch_assoc());
	}
	return null;
}
$debut = $_POST["debut"];
$fin = $_POST["fin"];
$titre = $_POST["titre"];
$desc = $_POST["desc"];
creerCours ($debut, $fin, $titre, $fin);
?>