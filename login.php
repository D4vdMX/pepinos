<?php
include 'db.php'; // Conexión a la base de datos

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Verificar si el email existe en la base de datos
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verificar si la contraseña ingresada coincide con la de la base de datos
        if (password_verify($password, $user['password'])) {
            echo "Inicio de sesión exitoso";
            header("Location: dashboard.html"); // Redirige al dashboard
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Usuario no encontrado.";
    }
} else {
    echo "Método no permitido.";
}
?>
