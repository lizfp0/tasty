<!-- Aquí pondre el contador (lo de que cada vez que un usuario entre a la página, vaya sumando +1 y se muestre a un lado de la ruta visitada) -->
<?php session_start(); 
    if (!isset($_SESSION["contador"])){  
         $_SESSION["contador"] = 0;
    }else{
        $_SESSION["contador"]++;
    }
?>
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
<body>
<i class="fa-solid fa-user-plus"></i>
<?php
#ff
//ff
/* ff */
/*Crea una sesión y una variable dentro de ella que lleve un contador de 
todas las páginas que visita un usuario (pon el código en varias páginas).
Si no existe la variable (con isset()), créala*/

echo "<h2>Visitaste " . $_SESSION["contador"] . " veces</h2>";


?>
</body>
</html>