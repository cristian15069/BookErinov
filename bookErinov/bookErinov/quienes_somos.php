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
    <title>Nosotros</title>
</head>

<body>
    <header class="encabezado">
        <!--Barra de navaegacion -->
        <?php include "modulos/menu-navegacion.php"; ?>

        <!--Titulo y eslogan-->
        <div class="contenedor nombre">
            <h1 class="titulo">Book Erinov</h1>
            <p class="texto">Explora nuestra página, sumérgete en el mundo de los libros y únete a nuestra comunidad de lectores entusiastas. ¡Estamos emocionados de tenerte aquí y esperamos que disfrutes de todas las maravillas que la lectura tiene para ofrecerte!</p>

        </div>
    </header>

    <main>
        <!--Quinenes somos?-->
        <section class="contenedor" id="somos">
            <h2 class="subtitulo">¿Quienes somos?</h2>
            <div class="contenedor-somos">
                <!-- <img src="img/Qsomos.png" alt=""> -->


                <section class="contenedor principal_nos">

                    <div class="contenedor-reseñas">
                        <img src="img/book.png" alt="">
                        <p id="descripcion"> BookSwap es una plataforma digital dedicada al intercambio de libros. Nos consideramos una comunidad de lectores apasionados
                            que creen en el poder de compartir conocimiento, descubrir nuevas historias y fomentar la cultura de la lectura.
                            Nuestro equipo está compuesto por profesionales con experiencia en desarrollo web, diseño, gestión de comunidades y,
                            sobre todo, amor por los libros.
                            Nos apasiona conectar a personas con intereses similares y ofrecerles una forma sencilla y conveniente de intercambiar libros.
                            Creemos en la importancia de promover la reutilización de recursos literarios para reducir el impacto ambiental y hacer
                            que la lectura sea más accesible para todos.
                        </p>


                    </div>
            </div>
        </section>

        <!--Nuestro equipo-->
        <section class="contenedor" id="equipo">
            <h2 class="subtitulo">Nuestro equipo</h2>
            <section class="equipo">
                <div class="cont-equipo">
                    <img src="img/Michell.jpeg" alt="">
                    <h3 class="nombre-equipo">Michell Berenice García Carmona</h3>
                </div>
                <div class="cont-equipo">
                    <img src="img/Cristian.jpeg" alt="">
                    <h3 class="nombre-equipo">Cristian Alberto García García</h3>
                </div>
                <div class="cont-equipo">
                    <img src="img/Pilar.jpeg" alt="">
                    <h3 class="nombre-equipo">María del Pilar García Tur<h3>
                </div>
                <div class="cont-equipo">
                    <img src="img/Valentina.jpeg" alt="">
                    <h3 class="nombre-equipo">Valentina Mojica García</h3>
                </div>
                <div class="cont-equipo">
                    <img src="img/Quetz.jpeg" alt="">
                    <h3 class="nombre-equipo">Cecilia Quetzali Vazquez Hernández</h3>
                </div>
            </section>
        </section>
    </main>
    </section>


    <!-- Pie de pagina -->
    <?php include "modulos/footer.php"; ?>

</body>

</html>