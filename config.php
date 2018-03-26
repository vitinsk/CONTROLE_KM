<?php 
require 'enviroment.php';
$config = array();
if (ENVIROMENT == 'development') {
	define("BASE_URL", "http://localhost/CONTROLE_KM/");
	$config['dbname'] = 'controlekm';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}
else
{
	define("BASE_URL", "https://177.157.161.175/CONTROLE_KM/");
	$config['dbname'] = 'controlekm';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = '';
}
global $db;
try {
		
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);

} catch (PDOException $e) {
	echo "Erro: ".$e->getMessage();
	exit;
}


?>