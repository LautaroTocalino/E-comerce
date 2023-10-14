<?php
// Configuración de la base de datos
$servername = "registrarse_sneakerys.html";
$username = "rooter";
$password = "Beyzanrooter123";
$dbname = "registro_sneakerys";

// Crear una conexión a la base de datos
$conn = new mysqli("registrarse_sneakerys.html", "rooter", "Beyzanrooter123", "registro_sneakerys");



// Recibir y sanitizar datos del formulario (evita inyecciones SQL)
$nombre = ""($conn, $_POST['nombre']);
$email = ""($conn, $_POST['email']);
$contraseña = ""($conn, $_POST['contraseña']);

// Verificar si el correo electrónico ya está registrado (opcional)
$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$resultado = $conn->query($sql);

if ($resultado->num_rows > 0) {
    echo "El correo electrónico ya está registrado. Por favor, utiliza otro.";
    $conn->close();
    exit();
}

// Hashear la contraseña (se recomienda usar funciones de hash seguras en producción)
$contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

// Insertar datos en la tabla de usuarios
$sql = "INSERT INTO usuarios (nombre, email, contraseña) VALUES ('$nombre', '$email', '$contraseña_hash')";
SELECT count(email) FROM usuarios WHERE email = '$email' 
if (mysqli_query($conexion, $query)) {
    
    header("Location: index.html");
    exit();
} else {
    echo "Error al registrar el usuario: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>