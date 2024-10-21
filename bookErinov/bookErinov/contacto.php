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

<body class="fondo3">
    <?php include "modulos/menu-navegacion.php"; ?>

    <main class="contenedor">
    <form class="principal_cont__formulario">
                <h2 class="principal_cont__titulo">Contacto</h2>
                <p class="principal_cont__párrafo">Envia tu mensaje</p>

        <div class="form_contendor_cont">
            <div class="form_group_cont">
                <input id="nombre" type="text" placeholder=" " required class="principal_cont__input">
                <label class="form_label_cont" for="nombre">Nombre</label>
                <span class="form_line_cont"></span>
            </div>

            <div class="form_group">
                <input id="correo" type="email" placeholder=" " required class="principal_cont__input">
                <label class="form_label_cont" for="correo">Correo</label>
                <span class="form_line_cont"></span>
            </div>
            <div class="textarea-contenedor">
                <textarea name="asunto" id="asunto" class="textarea" ></textarea>
                <label class="form_label_cont" for="asunto">Asunto</label>
                <!-- <span class="form_line_cont"></span> -->
            </div>

            <input  type="submit" value="Enviar" class="principal_cont__submit">
        </div>
    </main>
    <!-- Pie de pagina -->
    <?php include "modulos/footer.php"; ?>


</body>

</html>