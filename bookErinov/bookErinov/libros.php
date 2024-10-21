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
    <title>Catalogo</title>
</head>

<body>

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

        <!-- <div class="contenedor-libros"> -->
        <div class="libros">
            <div class="producto-libros">
                <img src="img/libro1.png" class="img-libros">
                <h2 class="titulo-libros">el gato y su soledad</h2>
                    <p class="descripcion-libros">Este libro te pone en dilema: "Oh Luna ¿Acaso solo debo estar?" ¿Que elegirías? Vivir sin soledad pero teniendo que pagar un precio o enfrentarla con valentía. ¿Tú qué harías?, ¿Cuál sería tu decisión?</p>
                <p class="Estado">Buen estado</p>
                <button class="adquirir" onclick="guardarImagen(this)">Adquirir</button>
            </div>
            <div class="producto-libros">
                <img src="img/libro2.jpg" class="img-libros">
                <h2 class="titulo-libros">heartstopper</h2>
                <p class="descripcion-libros">Esta historia de amor entre dos chicos. Heartstopper responde a la manera de sentir de los jóvenes, con una visión abierta, natural y sensible sobre el amor y la identidad sexual, sin perder la delicadeza y emoción.</p>
                <p class="Estado">Buen estado</p>
                <button class="adquirir" onclick="guardarImagen(this)">Adquirir</button>
            </div>
            <div class="producto-libros">
                <img src="img/libro3.jpg" class="img-libros">
                <h2 class="titulo-libros">Invisible</h2>
                <p class="descripcion-libros">Desde hace un tiempo, un chico se despierta cada noche con profundos dolores y un pitido ensordecedor, en una habitación de hospital. A su lado, una madre que se aferra al hijo que creía haber perdido.</p>
                <p class="Estado">Buen estado</p>
                <button class="adquirir" onclick="guardarImagen(this)">Adquirir</button>
            </div>
            <div class="producto-libros">
                <img src="img/libro5.png" class="img-libros">
                <h2 class="titulo-libros">El chico de la piel de cerdo</h2>
                <p class="descripcion-libros">El libro contiene historias como la de un hombre inexplicablemente infestado, niñas que no son lo que parecen, objetos con un perturbador origen, pesadillas infantiles y hasta un circo aterrador.</p>
                <p class="Estado">Buen estado</p>
                <button class="adquirir" onclick="guardarImagen(this)">Adquirir</button>
            </div>
            <div class="producto-libros">
                <img src="img/libro6.jpg" class="img-libros">
                <h2 class="titulo-libros">La realidad que no muchos ven</h2>
                <p class="descripcion-libros">Unos meses después de su viaje al mundo de los sueños, Luna no recuerda a Dariel; él no quiere perderla y desea contactar con ella de nuevo. Luna ha conocido a otras personas y se ha enamorado.</p>
                <p class="Estado">Buen estado</p>
                <button class="adquirir" onclick="guardarImagen(this)">Adquirir</button>
            </div>
            <div class="producto-libros">
                <img src="img/libro7.jpg" class="img-libros">
                <h2 class="titulo-libros">Comiendo con miedo</h2>
                <p class="descripcion-libros">En su proceso creativo y mediante la historia de "Comiendo con miedo". La autora Elisabeth pretende hablar abiertamente sobre los TCA y la violencia en nuestra sociedad.</p>
                <p class="Estado">Buen estado</p>
                <button class="adquirir" onclick="guardarImagen(this)">Adquirir</button>
            </div>
            <div class="producto-libros">
                <img src="img/libro8.jpg" class="img-libros">
                <h2 class="titulo-libros">Amor de psicopatas</h2>
                <p class="descripcion-libros">A esta chica llamada Abby Wilson, le pasa por la mente suicidarse debido a que sus padres eran unos adictos a las drogas y al alcohol, sufría de múltiples maltratos tanto físicos como mentales.</p>
                <p class="Estado">Buen estado</p>
                <button class="adquirir" onclick="guardarImagen(this)">Adquirir</button>
            </div>
            <div class="producto-libros">
                <img src="img/libro9.jpg" class="img-libros">
                <h2 class="titulo-libros">La muerte no es un juego de niños</h2>
                <p class="descripcion-libros">Inglaterra, 1950. Flavia de Luce tiene once años y tres pasiones: los venenos, molestar a sus hermanas mayores y resolver misterios, acompañala en este nuevo misterio</p>
                <p class="Estado">Buen estado</p>
                <button class="adquirir" onclick="guardarImagen(this)">Adquirir</button>
            </div>

            <div class="producto-libros">
                <img src="img/libro10.jpg" alt="Imagen 1" class="img-libros">
                <h2 class="titulo-libros">Diario de un acosador</h2>
                <p class="descripcion-libros">La he visto una vez, desde ese entonces me obsesione con ella. La he estado siguiendo por años. Sólo observándola desde lejos, manteniendo la distancia. No quiero asustarla.</p>
                <p class="Estado">Buen estado</p>
                <button class="adquirir" onclick="guardarImagen(this)">Adquirir</button>
            </div>

            <div class="producto-libros">
                <img src="img/libro11.jpg" alt="" class="img-libros">
                <h2 class="titulo-libros">ADAM</h2>
                <p class="descripcion-libros">Tal vez parezca la típica historia cliché donde el chico asesino se enamore de la chica inocente y buena. Pero Reachell no es inocente, ni buena. Y Adam ya ama a alguien más.</p>
                <p class="Estado">Buen estado</p>
                <button class="adquirir" onclick="guardarImagen(this)">Adquirir</button>
            </div>

            <div class="producto-libros">
                <img src="img/libro12.jpg" alt="" class="img-libros">
                <h2 class="titulo-libros">Un beso bajo la lluvia</h2>
                <p class="descripcion-libros">Bajo la lluvia, las cosas no resultaron bien para Floyd McFly. En medio de un parque, mojada y con el corazón roto, era alguien a quien acababan de decirle: Esto no va a funcionar. </p>
                <p class="Estado">Buen estado</p>
                <button class="adquirir" onclick="guardarImagen(this)">Adquirir</button>
            </div>

            <div class="producto-libros">

                <img src="img/libro13.jpg" alt="" class="img-libros">
                <h2 class="titulo-libros">sigue mi voz</h2>
                <p class="descripcion-libros">Todos conocemos el amor pasional que te nubla la razón, el amor a primera vista que te vacía el estómago y el amor platónico que llena el corazón de fantasía y admiración.</p>
                <p class="Estado">Buen estado</p>
                <button class="adquirir" onclick="guardarImagen(this)">Adquirir</button>
            </div>

            <div class="producto-libros">

                <img src="img/libro14.png" alt="" class="img-libros">

                <h2 class="titulo-libros">Al Final mueren los dos</h2>
                <p class="descripcion-libros">La historia de Mateo y Rufus, dos jóvenes que se conocen a través de una aplicación creada para personas que morirán en menos de 24 hrs tras recibir la llamada de Muerte Súbita.</p>
                <p class="Estado">Buen estado</p>
                <button class="adquirir" onclick="guardarImagen(this)">Adquirir</button>
            </div>

            <div class="producto-libros">
                <img src="img/libro15.jpg" alt="" class="img-libros">

                <h2 class="titulo-libros">de sangre y cenizas</h2>
                <p class="descripcion-libros">Apasionante y con una acción trepidante. De sangre y ceniza es una fantasía sexy, adictiva e inesperadaUna Doncella, elegida desde su nacimiento para dar comienzo a una nueva era.</p>
                <p class="Estado">Buen estado</p>
                <button class="adquirir" onclick="guardarImagen(this)">Adquirir</button>
            </div>

            <div class="producto-libros">
                <img src="img/libro16.jpg" alt="" class="img-libros">
                <h2 class="titulo-libros">seis de cuervos</h2>
                <p class="descripcion-libros">Kaz Brekker, un genio del crimen que regenta un antro conocido como el Club Cuervo, debe reunir a un grupo de seis personas con habilidades para entrar y salir de la Corte de Hielo</p>
                <p class="Estado">Buen estado</p>
                <button class="adquirir" onclick="guardarImagen(this)">Adquirir</button>
            </div>


            <!-- Agrega más productos aquí -->
        </div>
        <!-- </div> -->



        <!-- Pie de pagina -->
        <?php include "modulos/footer.php"; ?>


    </body>

</html>