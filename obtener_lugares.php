<?php
include("conexion.php");

header("Content-Type: application/json");

$sql = "SELECT * FROM lugares ORDER BY id DESC";
$result = $conn->query($sql);

$lista = [];

while ($fila = $result->fetch_assoc()) {
    $lista[] = $fila;
}

echo json_encode($lista);
?>
