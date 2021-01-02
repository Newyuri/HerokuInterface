<?php
header('Content-Type:application/json; charset=utf-8');

$name = "song";
$age = "20";
$sex = "1";

$answer = array();
$answer['name']=$name;
$answer['age']=$age;
$answer['sex']=$sex;
$ans = array();
for( $i=0;$i<3;$i++){
    array_push($ans,$i);
}

$answer['friends']=$ans;
//var_dump($answer);
//print_r($answer);

exit(json_encode($answer)); 

//echo HM;
?>
