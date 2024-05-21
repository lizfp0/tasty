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

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TastyWay</title>
    <meta name="keywords" content="Rutas de comida, Foodie">
    <meta name="author" content="Dayana Lizbeth">
    <meta name="copyright" content="TastyWay">
    <link rel="shortcut icon" href="image/tastyway.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/estilos.css">

</head>

<body>
    <div class="container">
        <div class="signin-signup">
            <!-- LOGIN -->
            <form action="login.php" class="sign-in-form" method="POST" id="form_log">
                <h2 class="title">Iniciar Sesión</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input name="usuario" id="usuario" type="text" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input id="passw" type="password" placeholder="Password">
                </div>
                <input type="submit" value="Login" class="btn">
                <? if (isset($_POST['usuario'])) {
                    $usuario = $_POST['usuario'];
                    if (userExists($usuario)) {
                        header('Location: perfiluser.php');
                    } else {
                        header('Location: registro.php');
                    }
                    exit;
                }
                ?>

                <!--OTRAS REDES SOCIALES-->
                <p class="social-text">Inicie sesión con red social?</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                </div>
                <p class="account-text">No tienes una cuenta? <a href="#" id="sign-up-btn2">Registrate</a></p>
            </form>


            <!--REGISTRO-->
            <form action="registro.php" class="sign-up-form" method="POST">
                <h2 class="title">Registrarse</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input id="nombre" type="text" placeholder="Nombre">
                </div>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input id="usuario" type="text" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input id="email" type="text" placeholder="Email">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input id="passw" type="password" placeholder="Password">
                </div>
                <input type="submit" value="Sign up" class="btn">
                <?php
                if (isset($_POST['nombre']) && isset($_POST['usuario']) && isset($_POST['email']) && isset($_POST['passw'])) {
                    $nombre = $_POST['nombre'];
                    $usuario = $_POST['usuario'];
                    $email = $_POST['email'];
                    $passw = password_hash($_POST['passw'], PASSWORD_DEFAULT);

                    $stmt = $conn->prepare("INSERT INTO usuario (nombre, usuario, email, passw) VALUES (?, ?, ?, ?)");
                    $stmt->bind_param("ssss", $nombre, $usuario, $email, $passw);
                    $stmt->execute();

                    header('Location: perfiluser.php');
                    exit;
                }
                ?>

                <!--OTRAS REDES SOCIALES-->
                <p class="social-text">Registrarse con una red social?</p>
                <div class="social-media">
                    <a href="#" class="social-icon">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="#" class="social-icon">
                        <i class="fab fa-google"></i>
                    </a>
                </div>
                <p class="account-text">Ya tienes cuenta? <a href="#" id="sign-in-btn2">Iniciar sesión</a></p>
            </form>
        </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Miembro TasteWay?</h3>
                    <p>Inicia sesión aquí...</p>
                    <button class="btn" id="sign-in-btn">Inicia Sesión</button>
                </div>
                <img src="image/nuevo.png" alt="" class="image">
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Nuevo en TasteWay?</h3>
                    <p>Registrate aquí...</p>
                    <button class="btn" id="sign-up-btn">Registrate</button>
                </div>
                <img src="image/miembro.png" alt="" class="image">
            </div>
        </div>
    </div>
    <!-- JAVASCRIPT -->
    <script type="text/javascript" src="javascript.js"></script>
</body>

</html>