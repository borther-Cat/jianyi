<?php
$con = mysqli_connect("127.0.0.1", "root", "", "db");
$cartid = $_REQUEST["cartid"];
$sql = "DELETE FROM cart  WHERE cartid='$cartid'";
mysqli_query($con, $sql);
?>