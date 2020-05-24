<?php
header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_GET["x"], false);

$conn = new mysqli("mysql.rkjr.com.br", "rkjr", "Paat2010", "rkjr");
$stmt = $conn->prepare("SELECT id,descricao,lat,longi FROM geoloc ");

$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode($outp);
?>



