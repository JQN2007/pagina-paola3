<?php
include("conexion.php");

$nombre = $_POST["nombre"];
$categoria = $_POST["categoria"];
$comentario = $_POST["comentario"];

$sql = "INSERT INTO lugares (nombre, categoria, comentario) VALUES ('$nombre', '$categoria', '$comentario')";

if ($conn->query($sql)) {
    header("Location: index2.html");
    exit;
} else {
    echo "Error al guardar.";
}
?>
