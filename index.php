<?php include("conexion.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pedidos - Pastelería</title>
</head>
<body>

<h2>Lista de Pedidos</h2>
<a href="crear.php">➕ Nuevo Pedido</a>
<br><br>

<table border="1">
    <tr>
        <th>ID</th>
        <th>Cliente</th>
        <th>Descripción</th>
        <th>Dirección</th>
        <th>Acciones</th>
    </tr>

<?php
$sql = "SELECT * FROM pedidos";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
?>
<tr>
    <td><?php echo $row['id']; ?></td>
    <td><?php echo $row['cliente']; ?></td>
    <td><?php echo $row['descripcion']; ?></td>
    <td><?php echo $row['direccion']; ?></td>
    <td>
        <a href="editar.php?id=<?php echo $row['id']; ?>">✏️ Editar</a>
        <a href="eliminar.php?id=<?php echo $row['id']; ?>" onclick="return confirm('¿Eliminar pedido?')">🗑️ Eliminar</a>
    </td>
</tr>
<?php } ?>

</table>

</body>
</html>