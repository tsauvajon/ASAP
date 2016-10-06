<?php	
	include_once "connectionBDD.php";
?>      
<?php
function afficherProfil($idutil){
	$bdd = connectionBDD();
	$query = "CALL GetUtilisateur('" . $idutil . "')";
	$res = $bdd->query($query);
	
	if ($res->num_rows)
	{
		$res->data_seek($row_no);
		return json_encode($res->fetch_assoc());
	}
	return null;
}
//echo afficherProfil (1);
?>