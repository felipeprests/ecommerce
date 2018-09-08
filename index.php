<?php 
use Hcode\DB\Sql;


require_once("vendor/autoload.php");

$app = new \Slim\Slim();

$app->config('debug', true);

$app->get('/', function() {
    
	$sql = new Sql();

	$result = $sql->select('SELECT * FROM tb_users');

	echo json_encode($result);

});

$app->run();

 ?>