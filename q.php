<?php
header('Content-Type:application/json; charset=utf-8');

// $answer = array();
// $answer['config']=getenv('HAVESEX');
// exit(json_encode($answer)); 

$link = mysql_connect(getenv('DB_HOST'),getenv('DB_USER'),getenv('DB_PWD')); 

if (!$link) {  
	die('Could not connect to MySQL: ' . mysql_error()); 
} else {
	echo 'Connection OK';
	mysql_close($link); 
}




//echo HM;
?>
