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
editerCours (2, '2016-10-18 06:33:21', '2016-10-18 08:33:21', 'cours de php', 'cr�� par le code');
?>