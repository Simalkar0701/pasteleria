<?php
include("conexion.php");

$id = $_GET['id'];

$sql = "DELETE FROM pedidos WHERE id=$id";

if ($conn->query($sql)) {
    header("Location: index.php");
} else {
    echo "Error: " . $conn->error;
}
?>