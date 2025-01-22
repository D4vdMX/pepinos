<?php

$servidor = "localhost";
$usuario = "root";
$contrasena = "";
$base_datos = "contactos";

$conn = new mysqli(hostname: $servidor, username: $usuario, password: $contrasena, database: $base_datos);

if ($conn->connect_error) {
    die("Error al conectar con la base de datos: " . $conn->connect_error);
}

$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$comentario = $_POST['comentario'];

$nombre =$conn->real_escape_string(string: $nombre);
$correo =$conn->real_escape_string(string: $correo);
$comentario =$conn->real_escape_string(string: $comentario);

$sql = "INSERT INTO login (nombre, correo, comentario) VALUES ('$nombre', '$correo', '$comentario')";

if ($conn-> query(query: $sql) === TRUE) {
    echo "Mensaje enviado con exito";
    } else {
        echo "Error al enviar el mensaje: " . $conn->error;
}

$conn->close();
?>