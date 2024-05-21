<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header('Location: usuario.php');
    exit;
}

// Obtener información del usuario de la sesión
$usuario = $_SESSION['usuario'];
$nombre = $_SESSION['nombre'];
?>

<!--
// Obtener información del usuario de la base de datos
require_once 'database.php';
$stmt = $conn->prepare("SELECT * FROM usuario WHERE usuario = ?");
$stmt->bind_param("s", $_SESSION['usuario']);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Mostrar información del usuario en la página
echo "Bienvenido, " . $user['nombre'] . "!";
?>  -->

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perfil</title>
    <meta name="keywords" content="Rutas de comida, Foodie">
    <meta name="author" content="Dayana Lizbeth">
    <meta name="copyright" content="TastyWay">
    <link rel="shortcut icon" href="image/tastyway.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

</head>
<style>
    /* Estilos para el header */
    header {
        background-color: #57CC5B;
        padding: 30px;
    }

    nav {
        text-align: right;
    }

    nav a {
        color: #fff;
        text-decoration: none;
        margin-left: 20px;
        font-size: 16px;
        
    }

    nav i {
        color: #fff;
        text-decoration: none;
        margin-left: 15px;
        font-size: 20px;
        
    }

    nav a:hover {
        text-decoration: underline;
    }

    #plus {
        color: #666;
        text-decoration: none;
        margin-left: 15px;
        font-size: 20px;
    }


    /* Estilos para la foto de perfil */
    .profile-picture {
        width: 150px;
        height: 150px;
        border-radius: 50%;
        overflow: hidden;
    }

    .profile-picture img {
        width: 100%;
        height: auto;
    }
</style>

<body>
    <header>
        <!-- Menú de Navegación -->
        <nav>
            <a href="index.php">Inicio</a>
            <a href="nosotros.php">Nosotros</a>
            <a href="rutas.php">Rutas</a>
            <a href="contacto.php">Contacto</a>
            <a href="usuario.php"><i class="fas fa-user"></i></a>
        </nav>

    </header>
    <a href="logout.php">Cerrar sesión</a>

    
    <!-- Para que muestre el nombre de la persona que haya iniciado sesión -->
    <h1>Bienvenido, <?php echo $nombre; ?>!</h1>

    <!-- Aquí quiero subir la foto de perfil del usuario -->

    <div class="profile-picture">
        <?php
        session_start();
        if (isset($_SESSION['profilePicture'])) {
            echo '<img src="' . $_SESSION['profilePicture'] . '" alt="Mi foto de perfil">';
        } else {
            echo '<img src="default-profile-picture.jpg" alt="Foto de perfil predeterminada">';
        }
        ?>
    </div>

    

    <br>
    <h3>Rutas creadas: </h3><i id= "plus" class="fa-solid fa-circle-plus"></i>

    <h3>Rutas guardadas: </h3> <i class="fa-regular fa-heart"></i>


    <!-- JAVASCRIPT -->
    <script type="text/javascript" src="javascript.js"></script>
</body>

</html>