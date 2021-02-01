<html>
    <header>
        <h1 class="inicioSesion">API REST</h1>
        <div class="buttons-header-inicio">
            <!--
            <a href="detalle.php"><button class="button-inicio" name="Detalle"> <?php echo $aLang[$_COOKIE['idioma']]['details']; ?></button></a>
            <a href="editarPerfil.php"><button class="button-inicio" name="EditarPefil"> <?php echo $aLang[$_COOKIE['idioma']]['editProfile']; ?></button></a>
            -->
            <?php echo ($usuarioActual->getImagenPerfil() != null) ? '<img id="fotoPerfil" src = "data:image/png;base64,' . base64_encode($usuarioActual->getImagenPerfil()) . '" alt="Foto de perfil"/>' : "<img id='fotoPerfil' src='webroot/media/imagen_perfil2.png' alt='imagen_perfil'/>"; ?>
            <form name="logout" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <button class="logout" type="submit" name='cerrarSesion'><?php echo $aLang[$_COOKIE['idioma']]['logoff']; ?></button>
                <button class="logout" type="submit" name='editarPerfil'><?php echo $aLang[$_COOKIE['idioma']]['editProfile']; ?></button>
                <button class="logout" type="submit" name='borrarCuenta'><?php echo $aLang[$_COOKIE['idioma']]['deleteAcc']; ?></button>
            </form>
        </div>

    </header>
    <main class="main-container-inicio" class="flex-container-align-item-center">
        <article class="articuloEditar">
            <form class="rest"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div id="respuestarest">
                    <p id="titulorest"><?php echo $tituloEnCurso ?></p>
                    <img width="30%" src="<?php echo $imagenEnCurso ?>">
                    <p><?php echo $descripcionEnCurso ?></p>
                </div>
                <input id="fechaR" type="date" name="fecha" value="<?php echo date('Y-m-d') ?>"/>

                <div>
                    <button class="button" id="aceptar" type="submit" name="Aceptar1"><?php echo $aLang[$_COOKIE['idioma']]['accept']; ?></button>
                    <button class="button" id="cancelar" type="submit" name="Volver"><?php echo $aLang[$_COOKIE['idioma']]['cancel']; ?></button> 
                </div>
            </form>  
        </article>
    </main>
</html>