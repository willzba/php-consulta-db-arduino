<?php
// Configuración de la base de datos
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "prueba_datos";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

