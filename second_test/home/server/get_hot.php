<?php
    $da = mysqli_connect("127.0.0.1", "root", "", "db");
    $sql = "SELECT * FROM  hot";
    $result = mysqli_query($da,$sql);
    $data = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $response = array("status"=>"success","data" => $data);
    echo json_encode($response,true);
?>