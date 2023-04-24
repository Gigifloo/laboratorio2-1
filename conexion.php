<?php
	function conexion(){
	$host = "host=containers.railway.app";
	$port = "port=7710";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=lOB4ED7jCaKo2om3RToi";
	$db = pg_connect("$host $port $dbname $user $password");
    return $db;
}
?>