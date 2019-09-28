<?php
$json = file_get_contents("banner_r.json");
$arrData = json_decode($json,true);
$db = mysqli_connect("127.0.0.1","root","","db");
for($i = 0;$i<count($arrData);$i++)
{
  $src = $arrData[$i]["src"];
  
  $sql = "INSERT INTO `banner_r` (`id`, `src`) 
VALUES (NULL, '$src');";
  mysqli_query($db, $sql);
}

?>