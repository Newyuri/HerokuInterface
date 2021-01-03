<?php
header('Content-Type:application/json; charset=utf-8');

$answer = array();

$mysql_conf = array(
  'host'  => getenv('DB_HOST'),
  'db'   => '',
  'db_user' => getenv('DB_USER'),
  'db_pwd' => getenv('DB_PWD')
);

$mysqli = @new mysqli($mysql_conf['host'], $mysql_conf['db_user'], $mysql_conf['db_pwd']);

if ($mysqli->connect_errno) {
	die("could not connect to the database:\n" . $mysqli->connect_error);
	$answer['error']=getenv('HAVESEX');

} else {
	$answer['config']=getenv('HAVESEX');
}

// $mysqli->query("set names 'utf8';");//编码转化

// $select_db = $mysqli->select_db($mysql_conf['db']);

// if (!$select_db) {

//   die("could not connect to the db:\n" . $mysqli->error);

// }$sql = "select uid from user where name = 'joshua';";

// $res = $mysqli->query($sql);

// if (!$res) {

//   die("sql error:\n" . $mysqli->error);

// }

// while ($row = $res->fetch_assoc()) {

//   var_dump($row);

// }

// $res->free();

$mysqli->close();
exit(json_encode($answer))

?>
