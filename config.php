<?php 
require 'enviroment.php';
$config = array();
if (ENVIROMENT == 'development') {
	define("BASE_URL", "http://localhost/CONTROLE_KM/");
	$config['dbname'] = 'controle_km';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}
else
{
	$config['dbname'] = 'controle_km';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'root';
}
global $db;
try {
		
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);

} catch (PDOException $e) {
	echo "Erro: ".$e->getMessage();
	exit;
}


?>