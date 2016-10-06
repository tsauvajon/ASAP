<?php	
	include_once "connectionBDD.php";
?>      
<?php
function afficherCours($coursid){
	$bdd = connectionBDD();
	$query = "CALL GetCours('" . $coursid . "')";
	$res = $bdd->query($query);
	
	if ($res->num_rows)
	{
		$res->data_seek($row_no);
		return json_encode($res->fetch_assoc());
	}
	return null;
}
echo afficherCours (1);
?>