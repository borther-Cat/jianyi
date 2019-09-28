<?php
    $json = file_get_contents("foot_hot.json");
    $arrData = json_decode($json,true);
    $db = mysqli_connect("127.0.0.1","root","","db");
    for($i = 0;$i<count($arrData);$i++)
    {
        $src = $arrData[$i]["src"];
        $del = $arrData[$i]["del"];
        
        $sql = "INSERT INTO `foot_hot` (`id`, `src`, `del`) 
        VALUES (NULL, '$src', '$del');";
        mysqli_query($db, $sql);
    }
?>