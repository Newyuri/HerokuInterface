<?php
header('Content-Type:application/json; charset=utf-8');

$answer = array();

$mysql_conf = array(
  'host'  => getenv('DB_HOST'),
  'db'   => getenv('DB_DB'),
  'db_user' => getenv('DB_USER'),
  'db_pwd' => getenv('DB_PWD')
);

$mysqli = @new mysqli($mysql_conf['host'], $mysql_conf['db_user'], $mysql_conf['db_pwd']);

if ($mysqli->connect_errno) {
	die("could not connect to the database:\n" . $mysqli->connect_error);
	$answer['error'] = "connect error";
} else {
	$answer['succeed'] = "connect succeed";
}

$mysqli->query("set names 'utf8';");

$select_db = $mysqli->select_db($mysql_conf['db']);

if (!$select_db) {
	die("could not connect to the db:\n" . $mysqli->error);
	$answer['error'] = "connect db error";
}

$sql = "select * from gettime where id = '0';";

$res = $mysqli->query($sql);

if (!$res) {
  die("sql error:\n" . $mysqli->error);
  $answer['error'] = "select error";
}

while ($row = $res->fetch_assoc()) {
  //var_dump($row);
  $answer['title'] = $row['title'];
  $answer['time'] = $row['time'];
}

$res->free();

$mysqli->close();
exit(json_encode($answer))

?>
