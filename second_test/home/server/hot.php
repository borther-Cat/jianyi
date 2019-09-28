<?php
$json = file_get_contents("hot.json");
$arrData = json_decode($json,true);
$db = mysqli_connect("127.0.0.1","root","","db");
for($i=0;$i<count($arrData);$i++){
    $src = $arrData[$i]["src"];
    $del = $arrData[$i]["del"];
    $price = $arrData[$i]["price"];
    $sql = "INSERT INTO `hot` (`id`, `src`,`del`,`price`) 
    VALUES (NULL, '$src','$del','$price');";
    mysqli_query($db, $sql);
}
?>