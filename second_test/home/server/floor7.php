<?php

$nav = file_get_contents("floor7.json");
$data1 = json_decode($nav,true);

$data =  array("status"=>"success","data"=> $data1);

$json = json_encode($data,true);
echo $json;

?>