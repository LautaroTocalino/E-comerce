<?php
session_start();

// Conectar a la base de datos (debes configurar esto adecuadamente)
$conn = mysqli_connect ("registrarse_sneakerys.html", "rooter", "Beyzanrooter123", "registro_sneakerys");

if (!$conexion) {
    die("Error al conectar a la base de datos: " . mysqli_connect_error());
}

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];

// Realizar la consulta para verificar las credenciales
$query = "SELECT id, nombre, contraseña_hash FROM usuarios WHERE mail = '$email'";
$resultado = mysqli_query($conexion, $query);

if ($resultado) {
    $fila = mysqli_fetch_assoc($resultado);
    if ($fila && password_verify($password, $fila['contraseña_hash'])) {
        // Autenticación exitosa: Iniciar sesión y redirigir al usuario a la página principal
        $_SESSION['usuario_id'] = $fila[''];
        $_SESSION['usuario_nombre'] = $fila[''];
      $_SESSION ['usuariO_contraseña'] = $fila[''];
        header("Location: index.html");
        exit;
    }
}

// Si las credenciales son incorrectas, redirigir al usuario a la página de inicio de sesión
header("Location: iniciar_sesion.html?error=1");
exit;
?>
