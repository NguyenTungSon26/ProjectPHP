<?php
include_once("./shared/connect.php");
$prd_id = $_GET["prd_id"];
$sql = "DELETE FROM product
        WHERE prd_id = $prd_id";
mysqli_query($conn, $sql);
// chuyển hướng
header("location: product.php");
