<?php



// Paramétrage des différentes valeurs de connexion à la base de donénes
define('SQL_HOST',       'localhost');
define('SQL_USERNAME',   'root');
define('SQL_PASSWORD',   '');
define('SQL_DBNAME',	 'mineproject'); 



// Connexion à la base de données
try {
	$db = new PDO('mysql:dbname='.SQL_DBNAME.';host='.SQL_HOST, SQL_USERNAME, SQL_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
}
catch(Exception $e) {
	exit('Erreur : ' . $e->getMessage());
}



?>