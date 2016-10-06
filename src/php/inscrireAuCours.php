<?php	
	include_once "connectionBDD.php";
?>      
<?php

function inscrireTuteur($idutil, $idcours){
	$bdd = connectionBDD();
	$query = "CALL InscrireCoursTuteur('" . $idcours . "', '" . $idutil . "')";
	$res = $bdd->query($query);
	
	if ($res->num_rows)
	{
		$res->data_seek($row_no);
	}
	return json_encode($res->fetch_assoc());
}

function inscrireEleve($idutil, $idcours){
	$bdd = connectionBDD();
	$query = "CALL InscrireCoursEleve('" . $idcours . "', '" . $idutil . "')";
	$res = $bdd->query($query);
	
	if ($res->num_rows)
	{
		$res->data_seek($row_no);
		return json_encode($res->fetch_assoc());
	}
	return json_encode($res->fetch_assoc());
}

// perso.montpellier.epsi.fr/~antoine.porquet/inscrireAuCours.php?type=Tuteur&idutil=1&idcours=1

//echo inscrireEleve (1,1);
//echo inscrireEleve (2,1);
?>