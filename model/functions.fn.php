<?php
//Il est possible d'ajouter des paramètres selon le besoin.
//Faire attention à la nomenclature de la base, ses tables et colonnes.
function insertSharedObject($db, $object, $person){
	try{
		$sql = "INSERT INTO shared SET object = :object, person = :person";
		$req = $db->prepare($sql);
		$req->execute(array(':object' => $object, ':person' => $person));
		$result = $req->fetchAll(PDO::FETCH_ASSOC);
		return true;
	}
	catch (PDOException $e){
		print 'Erreur PDO : '.$e->getMessage().'<br/>';
		die();
	}
}
function deleteElement($db, $element_id){
	try{
		$sql = "DELETE FROM shared WHERE id = :id";
		$req = $db->prepare($sql);
		$req->execute(array(':id' => $element_id));
		$result = $req->fetchAll(PDO::FETCH_ASSOC);
		return true;
	}
	catch (PDOException $e){
		print 'Erreur PDO : '.$e->getMessage().'<br/>';
		die();
	}
}
?>