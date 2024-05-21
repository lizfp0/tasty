<?php
require_once 'database.php';

function userExists($usuario)
{
    global $conn;
    $stmt = $conn->prepare("SELECT * FROM usuario WHERE usuario = ?");
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->num_rows > 0;
}
?>

<?php
if (isset($_POST['nombre']) && isset($_POST['usuario']) && isset($_POST['email']) && isset($_POST['passw'])) {
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $passw = password_hash($_POST['passw'], PASSWORD_DEFAULT);

    if (userExists($usuario)) {
        echo 'El usuario ya existe.';
    } else {
        $stmt = $conn->prepare("INSERT INTO usuario (nombre, usuario, email, passw) VALUES (?, ?, ?, ?)"); // los placeholder ayudan a prevenir la inyección SQL
        $stmt->bind_param("ssss", $nombre, $usuario, $email, $passw); //bind_param para vincular los valores reales a los placeholder de VALUES (?,?,?,?)
        $stmt->execute();

        header('Location: perfiluser.php');
        exit;
    }
}
?>