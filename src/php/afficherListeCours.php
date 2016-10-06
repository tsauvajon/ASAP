<?php	
	include_once "connectionBDD.php";
?>      
<?php
function afficherCoursCrees(){
	$bdd = connectionBDD();
	$query = "CALL CoursAvecTuteurs()";
	$res = $bdd->query($query);
	
	$cours[];
	$res->data_seek(0);
	while ($row = $res->fetch_assoc()) {
		echo $row['intitule'];
		array_push($cours, $row);
	}

	return json_encode($cours);
}

function afficherDemandesCours(){
	$bdd = connectionBDD();
	$query = "CALL CoursSansTuteur()";
	//$res = $bdd->query($query);
	$res = mysqli_query($bdd, $query);	
	
	$cours = array();
	
	while ($row = mysqli_fetch_assoc($res))
	{
		$cours[] = $row;	
	}
	
	var_dump($cours);

	return json_encode($cours);
	
	/*
	$res->data_seek(0);
	while ($row = $res->fetch_assoc()) {
		echo " id = " . $row['id_cours'] . "\n";
	}*/
	
	/*$cours[];
	$res->data_seek(0);
	while ($row = $res->fetch_assoc()) {
		echo $row['intitule'];
		//array_push($cours, $row);
	}

	return json_encode($cours);*/
}
//echo afficherCoursCrees ();
echo afficherDemandesCours ();
?>