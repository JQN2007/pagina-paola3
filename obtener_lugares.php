<?php
include("conexion.php");

$sql = "SELECT * FROM lugares ORDER BY id DESC";
$result = $conn->query($sql);

$lugares = [];

while ($fila = $result->fetch_assoc()) {
    $lugares[] = $fila;
}

echo json_encode($lugares);
?>
