<?php
//Il est possible d'ajouter des paramètres selon le besoin.
//Faire attention à la nomenclature de la base, ses tables et colonnes.
function insertSharedObject($db, $NameObject, $NamePerson, $photoObject, $photoPerson){
	try{
		$sql = "INSERT INTO minetable SET NameObject = :NameObject, NamePerson = :NamePerson, photoObject = :photoObject, photoPerson = :photoPerson";
		$req = $db->prepare($sql);
		$req->execute(array(':NameObject' => $NameObject, ':NamePerson' => $NamePerson,':photoObject' => $photoObject, ':photoPerson' => $photoPerson));
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
		$sql = "DELETE FROM minetable WHERE id = :id";
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