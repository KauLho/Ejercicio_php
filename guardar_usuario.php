<?php
// Conectar a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cursosql";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];

// Insertar los datos en la base de datos
$sql = "INSERT INTO Usuario (NOMBRE, APELLIDO, EMAIL) VALUES ('$nombre', '$apellido', '$email')";
if ($conn->query($sql) === TRUE) {
    echo "Usuario guardado exitosamente.";
} else {
    echo "Error al guardar el usuario: " . $conn->error;
}

$conn->close();
?>
