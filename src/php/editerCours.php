<?php	
	include_once "connectionBDD.php";
?>      
<?php
function editerCours($idcours, $debut, $fin, $intitule, $description){
	$bdd = connectionBDD();
	$query = "CALL EditerCours('" . $idcours .  "', '" . $debut . "', '" . $fin . "', '" . $intitule . "', '" . $description . "')";
	$res = $bdd->query($query);
	
	if ($res->num_rows)
	{
		$res->data_seek($row_no);
		return json_encode($res->fetch_assoc());
	}
	return null;
}
$id = $_POST["id"]
$debut = $_POST["debut"];
$fin = $_POST["fin"];
$titre = $_POST["titre"];
$desc = $_POST["desc"];
editerCours ($id, $debut, $fin, $titre, $fin);
?>