<?php
header('Content-Type:application/json; charset=utf-8');

$conn = mysql_connect(getenv('DB_HOST'),getenv('DB_USER'),getenv('DB_PWD'));
if ($conn) {
	$answer = array();
	$answer['config']=getenv('CONFIGKEY');
	exit(json_encode($answer)); 
}

//echo HM;
?>
