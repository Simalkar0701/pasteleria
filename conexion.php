<?php
$host = "mysql-testsao.alwaysdata.net";
$user = "testsao";
$pass = "clase1234";
$db = "testsao_pasteleria";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>