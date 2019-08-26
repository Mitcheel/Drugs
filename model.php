<?php
header('Content-Type: text/html; charset=utf-8');
function connectMySQL($server,$user,$password,$db) {
	
	$connection = new mysqli($server, $user, $password, $db);
  	$connection->set_charset("utf8");
	return $connection;
}
?>
