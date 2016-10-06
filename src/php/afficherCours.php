<?php	
	include_once "connectionBDD.php";
?>      
<?php
function afficherCours($coursid){
	$bdd = connectionBDD();
	$query = "CALL GetCours('" . $coursid . "')";
	$res = $bdd->query($query);

	return json_encode($res->fetch_assoc());
}
echo afficherCours (intval($_GET["idcours"]));
?>