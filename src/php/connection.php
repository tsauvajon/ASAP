<?php	
	include_once "connectionBDD.php";
?>      
<?php
function connection($login, $mdp){
	$bdd = connectionBDD();
	$query = "CALL Connecter('" . $login . "', '" . $mdp . "')";
	$res = $bdd->query($query);
	
	if ($res->num_rows)
	{
		$res->data_seek($row_no);
		return json_encode($res->fetch_assoc());
	}
	return null;
}
//echo connection ("Lemurien","abka34070");
?>