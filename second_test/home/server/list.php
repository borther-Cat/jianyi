<?php
$json = file_get_contents("list.json");  
$arrData = json_decode($json,true);   
$db = mysqli_connect("127.0.0.1","root","","db");
for($i = 0;$i<count($arrData);$i++)
{
  $src = $arrData[$i]["src"];
  $del = $arrData[$i]["del"];
  $price = floatval(substr($arrData[$i]["price"], 2));
  $much = $arrData[$i]["much"];
  $des = $arrData[$i]["des"];;
  $sql = "INSERT INTO `list` (`id`, `src`, `del`, `price`, `much`, `des`) 
VALUES (NULL, '$src', '$del', $price, '$much', '$des');";
  mysqli_query($db, $sql);
}

    
?>  