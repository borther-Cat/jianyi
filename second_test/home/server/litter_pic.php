<?php
$json = file_get_contents("litter_pic.json");
$arrData = json_decode($json,true);
$db = mysqli_connect("127.0.0.1","root","","db");
for($i = 0;$i<count($arrData);$i++)
{
  $src = $arrData[$i]["src"];
  
  $sql = "INSERT INTO `litter_pic` (`id`, `src`) 
VALUES (NULL, '$src');";
  mysqli_query($db, $sql);
}

?>