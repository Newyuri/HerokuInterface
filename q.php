<?php
header('Content-Type:application/json; charset=utf-8');

$answer = array();
$answer['config']=$ENV["CONFIGKEY"];
exit(json_encode($answer)); 

//echo HM;
?>
