<?php	
	include_once "connectionBDD.php";
?>      
<?php
function getCours($idcours){
	$stmt = $bdd->prepare("CALL GetCours(?)");
    $stmt->bindParam(':p_idcours', $idcours, PDO::PARAM_STR);
    $stmt->execute();
    //echo "La proc�dure a retourn� : $return_value";
	
	return json_encode($return_value);
}
?>
