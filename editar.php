<?php
include("conexion.php");

$id = $_GET['id'];

$sql = "SELECT * FROM pedidos WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_POST) {
    $cliente = $_POST['cliente'];
    $descripcion = $_POST['descripcion'];
    $direccion = $_POST['direccion'];

    $sql = "UPDATE pedidos 
            SET cliente='$cliente', descripcion='$descripcion', direccion='$direccion'
            WHERE id=$id";

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
    <title>Editar Pedido</title>
</head>
<body>

<h2>Editar Pedido</h2>

<form method="POST">
    Cliente: <br>
    <input type="text" name="cliente" value="<?php echo $row['cliente']; ?>" required><br><br>

    Descripción: <br>
    <textarea name="descripcion" required><?php echo $row['descripcion']; ?></textarea><br><br>

    Dirección: <br>
    <input type="text" name="direccion" value="<?php echo $row['direccion']; ?>" required><br><br>

    <button type="submit">Actualizar</button>
</form>

<br>
<a href="index.php">⬅ Volver</a>

</body>
</html>