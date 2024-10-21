<nav class="menu-navegacion">
    <img class="logo " src="img/log-image.png" alt=""> <!-- logo de la empresa -->
    <!-- Menu de navegacion-Enlaces-->
    <ul class="enlaces">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="libros.php">Libros</a></li>
        <li><a href="quienes_somos.php">¿Quienes somos?</a></li>
        <!-- <li><a href="contacto.php">Contacto</a></li> -->
        <li><a href="registrarcuenta.php">Registrarse</a></li>
        <li><a href="iniciar_sesion.php">Iniciar Sesión </a></li>
        <!-- Fin del menu -->

        <!-- barra de busqueda -->
        <li id="ocultar">
            <div class="buscar ">
                <input type="text" placeholder="Buscar" required>
                <div class="boton">
                    <img src="img/buscar.svg" alt="">
                </div>
            </div>
        </li>
        <!--  -->
    </ul>
</nav>

<!-- menu responsivo -->
<div class="boton_resp">
    <img src="img/buscar.svg" alt="">
</div>

<div class="menu-resp">
    <img src="img/buscar.svg" alt="" id="btn-input">
    <input type="text" placeholder="Buscar" class="buscar_input ">

    <div class="logo_resp">
        <img src="img/log-image.png" alt=""> <!--logo de la empresa -->
    </div>

</div>

<img src="img/closeLight.svg" alt="" id="cerrar">

<img class="icono-menu" src="img/hamburguesa.svg" alt=""><!-- icono para desplegar menu -->
<script src="js/menu.js"></script>