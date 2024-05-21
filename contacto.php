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
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <!-- JAVASCRIPT -->
    <script type="text/javascript" src="javascript.js"></script>

</head>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Open Sans", sans-serif;
    }

    header {
        width: 100%;
        height: 200px;
        background: #43C6AC;
        /* fallback for old browsers */
        background: -webkit-linear-gradient(to right, #F8FFAE, #43C6AC);
        /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to right, #F8FFAE, #43C6AC);
        /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        background-size: cover;
        background-attachment: fixed;
        position: relative;
    }

    nav {
        text-align: right;
        padding: 30px 50px 0 0;
    }

    nav>a {
        color: #fff;
        font-weight: 700;
        text-decoration: none;
        margin-right: 10px;
    }

    nav>a:hover {
        text-decoration: underline;
    }

    .wave {
        position: absolute;
        bottom: 0;
        width: 100%;
    }

    /*Contacto*/

    .container {
        display: grid;
        grid-template-columns: repeat(2, 50%);
        padding: 20px;
        gap: 5px;
        width: 100%;
    }

    .box-info {
        color: black;
        display: flex;
        flex-direction: column;
        gap: 40px;
    }

    .box-info>h1 {
        text-align: left;
        letter-spacing: 7px;
    }

    .data {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .data>p {
        font-size: 18px;
    }

    .data>p>i {
        color: rgb(153, 241, 196);
        margin-right: 10px;
        font-size: 25px;
    }

    .links {
        display: flex;
        gap: 10px;
    }

    .links>a {
        text-decoration: none;
        width: 35px;
        height: 35px;
        background: rgb(153, 241, 196);
        text-align: center;
        transition: .1s;
        border-radius: 5px;
    }

    .links>a>i {
        color: #fff;
        line-height: 40px;
        font-size: 20px;
    }

    form {
        display: flex;
        flex-direction: column;
        text-align: center;
        gap: 18px;
    }

    .input-box {
        position: relative;
    }

    .input-box>input {
        width: 90%;
        height: 40px;
        padding: 0 10px;
        outline: none;
        background: rgb(153, 241, 196);
        border: 3px solid transparent;
        letter-spacing: 1px;
        transition: .3s;
        color: #fff;
        border-radius: 5px;
    }

    .input-box>textarea {
        width: 90%;
        height: 130px;
        outline: none;
        background: rgb(153, 241, 196);
        border: 3px solid transparent;
        letter-spacing: 1px;
        transition: .3s;
        color: #fff;
        padding: 10px;
        border-radius: 5px;
    }

    button {
        width: 20%;
        height: 30px;
        font-size: small;
        background: rgb(153, 241, 196);
        border: 3px solid transparent;
        letter-spacing: 1px;
        margin-left: 38px;
    }

    button:hover {
        background: rgb(62, 231, 144);
    }

    @media screen and (max-width: 1150px) {

        button {
            width: 25%;
            margin-left: 28px;
            border-radius: 5px;
        }
    }

    @media screen and (max-width: 900px) {

        button {
            width: 40%;
            margin-left: 18px;
            border-radius: 5px;
        }
    }

    @media screen and (max-width: 600px) {
        .container {
            width: 95%;
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .box-info {
            gap: 15px;
        }

        .box-info>h1 {
            font-size: 1.5rem;
        }

        button {
            width: 30%;
            margin-left: 20px;
            border-radius: 5px;
        }
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

        <!-- Generated by https://smooth.ie/blogs/news/svg-wavey-transitions-between-sections -->
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M-2.48,86.11 C187.69,161.89 373.36,11.31 500.00,49.85 L508.23,153.04 L0.00,149.60 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <div class="container">
        <div class="box-info">
            <h1>CONTACTA CON NOSOTROS</h1>
            <div class="data">
                <p>+555555555</p>
                <p>info@tasteway.com</p>
                <p>España</p>
            </div>
            <div class="links">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-google"></i></a>
            </div>
        </div>
        <!--Formulario del contacto -->
        <form action="">
            <div class="input-box">
                <input type="text" required placeholder="Nombre">
            </div>
            <div class="input-box">
                <input type="email" required placeholder="Correo electrónico">
            </div>
            <div class="input-box">
                <input type="text" required placeholder="Asunto">
            </div>
            <div class="input-box">
                <textarea cols="30" rows="10" placeholder="Escriba su mensaje"></textarea>
            </div>
            <button type="submit">Enviar mensaje</button>
        </form>
        <!-- Comprobación de los datos -->
        <!-- En este apartado enviaremos el contenido del formulario al correo de tastyway -->
        <!-- Mensajito de enviado el mensaje --> 
    </div>
</body>

</html>