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

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- JAVASCRIPT -->
    <script type="text/javascript" src="javascript.js"></script>

</head>

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
        <section class="textos-header">
            <h1>TastyWay</h1>
            <h2>Únete y descúbrelo</h2>
        </section>
        <!-- Generated by https://smooth.ie/blogs/news/svg-wavey-transitions-between-sections -->
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.85 C150.00,149.60 349.20,-49.85 500.00,49.85 L500.00,149.60 L0.00,149.60 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg>
        </div>
    </header>

    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">OFRECEMOS</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="image/post_inicial.png" alt="" class="imagen-sobre-nosotros">
                <div class="contenido-textos">
                    <h3><span>1</span>Variedad gastronómica</h3>
                    <p>TastyWay ofrece una amplia gama de opciones gastronómicas, desde restaurantes locales y
                        tradicionales hasta nuevos y emocionantes destinos culinarios. Esto permite a los usuarios
                        explorar diferentes tipos de cocina, sabores y experiencias.
                    </p>
                    <h3><span>2</span>Interacción comunitaria</h3>
                    <p>TastyWay no solo es una plataforma para encontrar restaurantes y rutas de comida, sino también un
                        espacio donde la comunidad gastronómica puede conectarse, compartir experiencias y recomendar
                        sus lugares favoritos.
                    </p>
                    <h3><span>3</span>Ahorro de tiempo</h3>
                    <p>Con TastyWay, los usuarios pueden encontrar fácilmente opciones de comida que se adapten a sus
                        preferencias y necesidades, lo que les ahorra tiempo y esfuerzo en la búsqueda de lugares para
                        comer.
                    </p>
                </div>
            </div>
        </section>
        <!-- Las imágenes tienen que llevarlos a las rutas correspondientes: española, latina, asiatica -->
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo">PORTAFOLIO</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="image/gambas.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="image/centrar.png" alt="">
                            <p>Descúbrelo</p>
                        </div>
                    </div>

                    <div class="imagen-port">
                        <img src="image/caracoles.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="image/centrar.png" alt="">
                            <p>Descúbrelo</p>
                        </div>
                    </div>

                    <div class="imagen-port">
                        <img src="image/ceviche.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="image/centrar.png" alt="">
                            <p>Descúbrelo</p>
                        </div>
                    </div>

                    <div class="imagen-port">
                        <img src="image/paella.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="image/centrar.png" alt="">
                            <p>Descúbrelo</p>
                        </div>
                    </div>

                    <div class="imagen-port">
                        <img src="image/pulpo.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="image/centrar.png" alt="">
                            <p>Descúbrelo</p>
                        </div>
                    </div>

                    <div class="imagen-port">
                        <img src="image/sushi.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="image/centrar.png" alt="">
                            <p>Descúbrelo</p>
                        </div>
                    </div>

                    <div class="imagen-port">
                        <img src="image/tacos.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="image/centrar.png" alt="">
                            <p>Descúbrelo</p>
                        </div>
                    </div>

                    <div class="imagen-port">
                        <img src="image/tortilla.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="image/centrar.png" alt="">
                            <p>Descúbrelo</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Traer los comentario de los usuarios que opinan sobre la página o las rutas -->
        <section class="clientes contenedor">
            <h2 class="titulo">¿QUÉ DICEN NUESTROS USUARIOS?</h2>
            <div class="cards">
                <div class="card">
                    <img src="image/mujer.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Usuario1</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ullam hic sequi repudiandae
                            esse officiis corrupti amet dignissimos. Esse nostrum fuga beatae error aperiam veritatis?
                            Tempora illum libero quas possimus.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="image/mujer.jpg" alt="">
                    <div class="contenido-texto-card">
                        <h4>Usuario2</h4>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus ullam hic sequi repudiandae
                            esse officiis corrupti amet dignissimos. Esse nostrum fuga beatae error aperiam veritatis?
                            Tempora illum libero quas possimus.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Aquí van los eventos, datos que nos traeremos de la base de datos -->   
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">ÚLTIMAS NOTICIAS</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind">
                        <img src="image/anuncio1.png" alt="">
                        <h3>Food Truck Festival</h3>
                        <p>Food Truck es un evento culinario que combina la gastronomía con la cultura. A partir del 14
                            de julio, se ofrecerá una variedad de experiencias únicas para los amantes de la buena
                            comida y la creatividad.</p>
                            <p>Maridaje de vinos Rioja con las mejores tapas y pintxos.</p>
                            <p>Explora lo dulce y lo cafetero en Madrid.</p>
                            <p>Platos icónicos de restaurantes de referencia en la capital.</p>
                            <p>Variedad gastronómica y buena música, ¿qué más se puede pedir?</p>
                            <p>🍽️🎉</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="image/anuncio2.png" alt="">
                        <h3>Festival de Comida Asiática</h3>
                        <p>Cada uno de los puestos ofrece un viaje único a través de las diferentes culturas y sabores
                            del continente asiático. Desde sushi o ramen hasta un adobo filipino o un delicioso pad
                            thai. ¡Prueba un bocado de cada uno y elige tu favorito! ¡Repetirás! 🍣🍲
                        </p>
                        <p>Proximámente se anunciará las fechas.</p>
                    </div>
                    <div class="servicio-ind">
                        <img src="image/anuncio3.png" alt="">
                        <h3>Feria de La Tapa</h3>
                        <p>Calienta motores para la que es una de las fechas más señaladas entre sus vecinos y
                            gente de Madrid, la celebración de una nueva edición de Rivaa, el tradicional festival de
                            tapas y música del barrio, que este año se celebra del 3 al 13 de Agosto.
                        </p>
                        <p> Serán 10 días durante los que diferentes establecimientos de Rivas estarán ofreciendo su
                            ya tradicional tapa y botellín o caña por un precio cerrado de 3€. Además, votar por tu tapa
                            favorita puede tener premio: en concreto, conseguir un año de cerveza gratis.🍹🍷🍺</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer>
        <!-- Sección de Redes Sociales -->
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Phone</h4>
                <p>695299238</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>info@tasteway.com</p>
            </div>
            <div class="content-foo">
                <h4>Location</h4>
                <p>España</p>
            </div>
        </div>
        <h2 class="titulo-final">&copy; 2024 TastyWay</h2>
    </footer>

</body>

</html>