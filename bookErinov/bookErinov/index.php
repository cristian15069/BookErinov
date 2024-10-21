<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,wght@0,500;1,400&family=Lobster&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="img/log-image.png" type="image/png" sizes="20x30">
    <title>BookErinov</title>
</head>

<body>
    <?php include "modulos/menu-navegacion.php"; ?>
    <header class="encabezado">

        <!--Titulo y eslogan-->
        <div class="contenedor nombre">
            <h1 class="titulo">Book Erinov</h1>
            <p class="texto">Explora nuestra página, sumérgete en el mundo de los libros y únete a nuestra comunidad de
                lectores entusiastas. ¡Estamos emocionados de tenerte aquí y esperamos que disfrutes de todas las
                maravillas que la lectura tiene para ofrecerte!</p>
        </div>
    </header>

    <main>
        <!-- CARRUSEL -->
        <section class="contenedor">
            <h2 class="subtitulo">--Bienvenidos a Book Erinov--<br />¡Con mas de 100 libros intercambiados!</h2>
            <section class="contenedor_carrusel">
                <div class="galeria">
                    <div class="carrusel_fondo">
                        <div class="carrusel">
                            <span style="--i:1;"><img src="img/libro1.png" alt=""></span>
                            <span style="--i:2;"><img src="img/libro2.jpg" alt=""></span>
                            <span style="--i:3;"><img src="img/libro3.jpg" alt=""></span>
                            <span style="--i:4;"><img src="img/libro4.jpg" alt=""></span>
                            <span style="--i:5;"><img src="img/libro5.png" alt=""></span>
                            <span style="--i:6;"><img src="img/libro6.jpg" alt=""></span>
                            <span style="--i:7;"><img src="img/libro7.jpg" alt=""></span>
                            <span style="--i:8;"><img src="img/libro8.jpg" alt=""></span>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!--  -->

        <!-- Tarjetas -->
        <section class="contenedor">
        <h2 class="subtitulo">Más Información:</h2>

            <div class="contenedorpre">
                <div class="tarjeta">
                    <img src="img/tarjeta.PNG">
                    <h4>¿Por qué intercambiar libros?</h4>
                    <p>El intercambio de libros te permite obtener nuevas lecturas sin tener que gastar dinero adicional. Puedes intercambiar los libros que ya has leído por otros que te interesen.</p>
                </div>

                <div class="tarjeta">
                    <img src="img/tarjeta2.PNG">
                    <h4>¿Cómo funciona BookErinov?</h4>
                    <p>El funcionamiento de BookErinov es sencillo y se basa en los siguientes pasos:<br />Registro<br />Creación de perfil<br />Búsqueda de libros.</p>
                </div>

                <div class="tarjeta">
                    <img src="img/familia.jpg">
                    <h4>¿Para quien es BookErinov?</h4>
                    <p>BookErinov está dirigido a todas aquellas personas apasionadas por la lectura y que deseen compartir y descubrir nuevos libros.</p>
                </div>
            </div>
        </section>
        <!--  -->
    </main>

    <!-- Pie de pagina -->
    <?php include "modulos/footer.php"; ?>


</body>

</html>