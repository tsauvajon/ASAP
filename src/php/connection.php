<?php	
	include_once "connectionBDD.php";
?>      
<?php
function connection($login, $mdp){
	
	//$res = $bdd->query("CALL Connecter(" . $login . ", " . $mdp . ")");
	$res = $bdd->query("Select * From cours");
	
	var_dump($res);
	var_dump($res->fetch_assoc());
	
	return json_encode($resultFetch);
}
?>