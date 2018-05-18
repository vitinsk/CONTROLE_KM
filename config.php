<?php 
require 'enviroment.php';
date_default_timezone_set("America/Sao_Paulo");
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
	define("BASE_URL", "https://vitinsk.000webhostapp.com/CONTROLE_KM/");
	$config['dbname'] = 'id3922837_controlekm';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'id3922837_root';
	$config['dbpass'] = 'vitinsk123';
}
global $db;
try {
		
	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);

} catch (PDOException $e) {
	echo "Erro: ".$e->getMessage();
	exit;
}


?>