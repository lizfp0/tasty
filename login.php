<?php
session_start();

// Verificar credenciales del usuario
// ...

// Crear sesión y almacenar información sobre el usuario
$_SESSION['usuario'] = $usuario;
$_SESSION['nombre'] = $nombre;

// Redirigir al usuario a la página de perfil
header('Location: perfiluser.php');
exit;
?>