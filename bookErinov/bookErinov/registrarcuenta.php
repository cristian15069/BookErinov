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
    <title>Registrar Cuenta</title>
</head>

<body class="fondo">

    <?php include "modulos/menu-navegacion.php"; ?>

    <main class="contenedor">
        <section class="principal_reg">

            <figure class="principal_reg__figura">
                <div class="principal_reg__contenedor">
                    <h2 class="principal_reg__titulo2">Bienvenid@ a bookerinov</h2>
                    <p class="principal_reg__párrafo2">Si ya tienes cuenta inicia sesion aqui</p>
                    <a href="iniciar_sesion.php"><button id="boton_in"> INICIAR SESION</button></a><br/>
                </div>
            </figure>

            <form class="principal_reg__formulario">
                <h2 class="principal_reg__titulo">Crear una cuenta</h2>
                <p class="principal_reg__párrafo">¿Ya tienes cuenta?</p>
                
                <div class="form_contendor">
                    <div class="form_group">
                        <input type="text" id="nombre" placeholder=" " required class="principal_reg__input">
                        <label class="form_label " for="nombre">Nombre</label>
                        <span class="form_linea"></span>
                    </div>


                    <div class="form_group">
                        <input type="text" id="Apellidos" placeholder=" " required class="principal_reg__input">
                        <label class="form_label " for="Apellidos">Apellidos</label>
                        <span class="form_linea"></span>
                    </div>

                    <div class="form_group">
                        <input type="email" id="correo" placeholder=" " required class="principal_reg__input">
                        <label class="form_label " for="correo">Ingresa correo</label>
                        <span class="form_linea"></span>
                    </div>

                    <div class="form_group">
                        <input type="contraseña" id="contraseña1" placeholder=" " required class="principal_reg__input">
                        <label class="form_label " for="contraseña1">Nueva una contraseña</label>
                        <span class="form_linea"></span>
                    </div>

                    <div class="form_group">
                        <input type="contraseña" id="contraseña2" placeholder=" " class="principal_reg__input" required>
                        <label class="form_label " for="contraseña2">Confima tu contraseña</label>
                        <span class="form_linea"></span>
                    </div>

                    <input type="submit" value="Crear Cuenta" class="principal_reg__submit">
                </div>

            </form>
        </section>
    </main>
    <!-- Pie de pagina -->
    <?php include "modulos/footer.php"; ?>

</body>

</html>