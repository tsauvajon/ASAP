<?php	
	include_once "connectionBDD.php";
?>      
<?php
function connection($login, $mdp){
	$bdd = connectionBDD();
	$sql = "CALL Connecter(" . $login . ", " . $mdp . ")";
	echo $sql . "\n";
	$res = $bdd->query($sql);
		
	//$sql = "select * from cours";
	//$res = $bdd->query($sql);
	
	//echo "edfezfes";
	//$res = null;
	var_dump($res);

	echo json_encode($res.fetch_assoc());
	
	//return json_encode($res);
}
connection ("Lemurien","abka34070");
?>