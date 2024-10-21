<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,wght@0,500;1,400&family=Lobster&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" href="img/log-image.png" type="image/png" sizes="20x30">
    <title>Intercambia tu libro</title>
</head>

<body class="fondo">
    <?php include "modulos/menu-navegacion.php"; ?>
    <main class="contenedor">
        <section class="principal_intercambio">

            <figure class="intercambio__figura">
                <img src="" class="intercambio__img" id="imagenSeleccionada" alt="Imagen seleccionada">
            </figure>

            <form class="form_intercambio">
                <h2 class="form_intercambio__titulo">Adquiere tu libro</h2>
                <p class="form_intercambio__párrafo">rellena los campos con los datos solicitados</p>
                
                <div class="form_contenedor_int">
                    
                    <div class="form_grupo_int">
                        <input type="text" id="nombre" placeholder="  " class="form_intercambio__input">
                        <label class="form_label_int " for="nombre">Nombre</label>
                        <span class="form_linea_int"></span>
                    </div>

                    <div class="form_grupo_int">
                        <input type="text" id="apellidos" placeholder="  " class="form_intercambio__input">
                        <label class="form_label_int " for="apellidos">Apellidos</label>
                        <span class="form_linea_int"></span>
                    </div>

                    <div class="form_grupo_int">
                        <input type="email" id="correo" placeholder="  " class="form_intercambio__input" required>
                        <label class="form_label_int " for="correo">Correo electronico</label>
                        <span class="form_linea_int"></span>
                    </div>

                    <div class="form_grupo_int">
                        <input type="text" id="direccion" placeholder="  " class="form_intercambio__input">
                        <label class="form_label_int " for="direccion">Direccion</label>
                        <span class="form_linea_int"></span>
                    </div>

                    <div class="form_grupo_int">
                        <input type="text" id="tiempo" placeholder="  " class="form_intercambio__input">
                        <label class="form_label_int " for="tiempo">Tiempo</label>
                        <span class="form_linea_int"></span>
                    </div>

                    <input type="submit" value="Aquirir" class="form_intercambio__submit">
                </div>


            </form>

        </section>
    </main>

    <!-- Pie de pagina -->
    <?php include "modulos/footer.php"; ?>
</body>

</html>