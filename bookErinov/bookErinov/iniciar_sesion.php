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
    <link rel="icon" href="img/log-image.png" id="nombre" type="image/png" sizes="20x30">
    <title>Iniciar Sesion</title>
</head>

<body class="fondo2">

    <?php include "modulos/menu-navegacion.php"; ?>

    <main class="contenedor">
        <section class="principal_in">

            <form class="principal_in__formulario">
                <h2 class="principal_in__titulo">Iniciar sesion</h2>
                <p class="principal_in__párrafo">¿Aun no tienes cuenta?</p>

                <div class="form_contendor">
                    <div class="form_group">
                        <input id="correo" type="email" placeholder=" " required class="principal_in__input">
                        <label class="form_label" for="correo">Ingresa correo</label>
                        <span class="form_line_in"></span>
                    </div>

                    <div class="form_group">
                        <input id="contraseña" type="password" placeholder=" " required class="principal_in__input">
                        <label class="form_label" for="contraseña">Contraseña</label>
                        <span class="form_line_in"></span>
                    </div>

                    <input  type="submit" value="Accesar" class="principal_in__submit">

                    <p class="principal_in__párrafo">O ingresa con</p>

                    <article class="principal_in__social">
                        <a href="#" class="principal_in__enlace">
                            <img src="./img/google-icono.svg" class="principal_in__icono">
                        </a>
                        <a href="#" class="principal_in__enlace">
                            <img src="./img/apple.svg" class="principal_in__icono">
                        </a>
                        <a href="#" class="principal_in__enlace">
                            <img src="./img/facebook.svg" class="principal_in__icono">
                        </a>
                    </article>
                </div>
            </form>

            <figure class="principal_in__figura">
                <div class="principal_in__contacto">
                    <h2 class="principal_in__titulo2">Bienvenid@</h2>
                    <p class="principal_in__párrafo2">Si aun no tienes cuenta aqui</p>
                    <a href="registrarcuenta.php"><button id="boton_reg"> REGISTRATE</button></a><br />
                </div>
            </figure>

        </section>
    </main>
    <!-- Pie de pagina -->
    <?php include "modulos/footer.php"; ?>

</body>

</html>