<?php
include("conexion.php");

if ($_POST) {
    $cliente = $_POST['cliente'];
    $descripcion = $_POST['descripcion'];
    $direccion = $_POST['direccion'];

    $sql = "INSERT INTO pedidos (cliente, descripcion, direccion)
            VALUES ('$cliente', '$descripcion', '$direccion')";

    if ($conn->query($sql)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Crear Pedido</title>
</head>
<body>

<h2>Nuevo Pedido</h2>

<form method="POST">
    Cliente: <br>
    <input type="text" name="cliente" required><br><br>

    Descripción: <br>
    <textarea name="descripcion" required></textarea><br><br>

    Dirección: <br>
    <input type="text" name="direccion" required><br><br>

    <button type="submit">Guardar</button>
</form>

<br>
<a href="index.php">⬅ Volver</a>

</body>
</html>