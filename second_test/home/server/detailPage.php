<?php
$id=$_REQUEST["id"];
# 001-先连接数据库
$db = mysqli_connect("127.0.0.1", "root", "", "db");

# 002-查询数据库得到所有的产品
$sql = "SELECT * FROM list where id=$id";
// echo $sql;
$result = mysqli_query($db, $sql);
# 003-把数据转换为JSON数据返回
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
$response = array("status"=>"success","data" => $data);
echo json_encode($response, true);
?>