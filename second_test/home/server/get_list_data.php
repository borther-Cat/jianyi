<?php
# 001-先连接数据库
$db = mysqli_connect("127.0.0.1", "root", "", "db");
$page = $_REQUEST["page"] * 28;  //0（0-20） 1（20-40） 2 3 4
$type = $_REQUEST["type"];
# 002-查询数据库得到所有的产品
if($type == 0){
  $sql = "SELECT * FROM list limit $page , 28";
}elseif($type ==1)
{
  $sql = "SELECT * FROM list  ORDER BY `list`.`price` DESC limit $page , 28";
}elseif($type == 2)
{
  $sql = "SELECT * FROM list  ORDER BY `list`.`price` ASC limit $page , 28";
}

$result = mysqli_query($db,$sql);

# 003-把数据转换为JSON数据返回
// print_r($result);
// MYSQLI_ASSOC  MYSQLI_NUM
$data = mysqli_fetch_all($result, MYSQLI_ASSOC);
$response = array("status"=>"success","data" => $data);
echo json_encode($response,true);
?>