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
    }

    body {
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

    .heading {
        width: 90%;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        text-align: center;
        margin: 20px auto;
    }

    .heading h1 {
        font-size: 50px;
        color: #000;
        margin-bottom: 25px;
        position: relative;
    }

    .heading h1::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 4px;
        display: block;
        margin: 0 auto;
        background-color: #43C6AC;
    }

    .heading p {
        font-size: 18px;
        color: #666;
        margin-bottom: 35px;
    }

    .container {
        width: 90%;
        margin: 0 auto;
        padding: 10px 20px;
    }

    .about {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }

    .about-image {
        flex: 1;
        margin-right: 40px;
        overflow: hidden;
    }

    .about-image img {
        max-width: 80%;
        height: auto;
        display: block;
        transition: 0.5s ease;
        border-radius: 35px;
    }

    .about-content {
        flex: 1;
    }

    .about-content h2 {
        font-size: 23px;
        margin-bottom: 15px;
        color: #333;
    }

    .about-content p {
        font-size: 18px;
        line-height: 1.5;
        color: #666;
        text-align: justify;
    }

    .blog {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        padding: 40px;
        border-bottom: 1px solid #000;
    }

    .blog-heading {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }

    .blog-heading span {
        color: #f33c3c;
    }

    .blog-heading h3 {
        font-size: 2.4rem;
        color: #2b2b2b;
        font-weight: 600;
    }

    .blog-container {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 20px 0px;
        flex-wrap: wrap;
    }

    .blog-box {
        width: 320px;
        height: 700px;
        background-color: #fff;
        border: 1px solid #ececec;
        margin: 20px;
        justify-content: center;
        align-items: center;
    }

    .blog-img {
        width: 100%;
        height: 280px;
    }

    .blog-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
    }

    .blog-text {
        padding: 30px;
        display: flex;
        flex-direction: column;
    }

    .blog-text p {
        color: #9b9b9b;
        font-size: 0.9rem;
        text-align: justify;
        text-overflow: ellipsis;
        margin: 20px 0px;
    }

    .linea::after {
        content: "";
        position: absolute;
        width: 100%;
        height: 4px;
        display: block;
        margin: 0 auto;
        background-color: #43C6AC;
    }

    @media screen and (max-width: 600px) {
        .heading {
            padding: 0px 20px;
        }

        .heading h1 {
            font-size: 36px;
        }

        .heading p {
            font-size: 17px;
            margin-bottom: 0px;
        }

        .container {
            padding: 0px;
        }

        .about {
            padding: 20px;
            flex-direction: column;
        }

        .about-image {
            margin-right: 0px;
            margin-bottom: 20px;
        }

        .about-content p {
            padding: 0px;
            font-size: 16px;
        }

        .blog-box {
            width: 70%;
        }

        .blog-text {
            width: 100%;
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

    <div class="heading">
        <h1>Tasty Way</h1>
        <p>¡Bienvenido a TasteWay, tu compañero de confianza en la exploración de las delicias gastronómicas!</p>
    </div>
    <div class="container">
        <section class="about">
            <div class="about-image">
                <img src="image/tastyway.png" alt="">
            </div>
            <div class="about-content">
                <h2>¡Estamos aquí para guiarte!</h2>
                <p>Seremos tu compañero confiable para descubrir las mejores rutas de comida en tu ciudad y más allá. Nos
                    dedicamos a conectar a los amantes de la comida con experiencias gastronómicas excepcionales. Ya sea
                    que estés buscando el restaurante más auténtico, el food truck más innovador o el mercado de
                    alimentos más vibrante</p>
            </div>
        </section>
    </div>

    <div class="linea"></div>

    <section class="blog">

        <div class="blog-heading">
            <span>Carácteristicas de TastyWay</span>
            <h3>🌟</h3>
        </div>

        <div class="blog-container">
            <!--Box 1-->
            <div class="blog-box">
                <div class="blog-img">
                    <img src="image/mision.jpg" alt="">
                </div>
                <div class="blog-text">
                    <p>Conectar a los amantes de la buena comida con experiencias culinarias únicas y auténticas,
                        ofreciendo una plataforma interactiva que facilite la exploración de diversas rutas
                        gastronómicas y promueva la diversidad cultural a través del placer de comer.</p>
                </div>
            </div>

            <!--Box 2-->

            <div class="blog-box">
                <div class="blog-img">
                    <img src="image/vision.jpg" alt="">
                </div>
                <div class="blog-text">
                    <p>Convertirnos en la principal referencia online para los entusiastas de la gastronomía, siendo
                        reconocidos por nuestra amplia variedad de rutas de comida, la calidad de nuestras
                        recomendaciones y la comunidad activa y comprometida que hemos construido en torno a nuestra
                        plataforma.</p>
                </div>
            </div>

            <!--Box 3-->

            <div class="blog-box">
                <div class="blog-img">
                    <img src="image/valores.jpg" alt="">
                </div>
                <div class="blog-text">
                    <p>Pasión por la comida: Nos apasiona descubrir y compartir experiencias culinarias excepcionales
                        que deleiten los sentidos y enriquezcan el alma.</p>
                    <p> Autenticidad: Valoramos la autenticidad en cada una de nuestras recomendaciones y promovemos la
                        honestidad y transparencia en todas nuestras interacciones.</p>
                    <p>Diversidad: Celebramos la diversidad cultural a través de la comida, reconociendo y respetando
                        las tradiciones culinarias de cada región y comunidad.</p>

                </div>
            </div>
        </div>

    </section>

    <div class="linea"></div>


</body>

</html>