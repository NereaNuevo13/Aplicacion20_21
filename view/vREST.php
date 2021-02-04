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
                <button class="logout" type="submit" name='editarPerfil'><?php echo $aLang[$_COOKIE['idioma']]['editProfile']; ?></button>
                <button class="logout" type="submit" name='borrarCuenta'><?php echo $aLang[$_COOKIE['idioma']]['deleteAcc']; ?></button>
                <button class="logout" type="submit" name='cerrarSesion'><?php echo $aLang[$_COOKIE['idioma']]['logoff']; ?></button>
            </form>
        </div>

    </header>
    <main class="main-container-inicio" class="flex-container-align-item-center">

        <article class="articuloREST">
            <h3>API BREAKING BAD</h3>
            <form style="text-align: center;" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <h2 style="font-size:22pt">Breaking Bad</h2>
                <div>
                    <p style="font-size:12pt"><span style="font-weight:bold; font-size:14pt">Nombre del actor: </span> <?php echo $nombrePersonaje ?></p>
                    <p style="font-size:12pt"><span style="font-weight:bold; font-size:14pt">Fecha cumpleaños: </span> <?php echo $cumpleaños ?></p>
                    <p style="font-size:12pt"><span style="font-weight:bold; font-size:14pt">Imagen: </span><br><img src=" <?php echo $imagen ?>" width="250" height="300"></p>
                    <p style="font-size:12pt"><span style="font-weight:bold; font-size:14pt">Estado del personaje: </span> <?php echo $estado ?></p>
                    <p style="font-size:12pt"><span style="font-weight:bold; font-size:14pt">Apodo del pesonaje: </span> <?php echo $apodo ?></p>
                    <p style="font-size:12pt"><span style="font-weight:bold; font-size:14pt">Actor: </span> <?php echo $actor ?></p>
                    <p style="font-size:12pt"><span style="font-weight:bold; font-size:14pt">Series: </span> <?php echo $categoria ?></p>
                </div>
                <input type="number" placeholder="1-57" max="57" min="1" name="numero" />
                <div>
                    <button class="button" id="botonAPI" type="submit" name="Aceptar2"><?php echo $aLang[$_COOKIE['idioma']]['accept']; ?></button>
                    <button class="button" id="botonAPI2" type="submit" name="Cancelar"><?php echo $aLang[$_COOKIE['idioma']]['cancel']; ?></button>
                </div>
                <a style="color:black; text-decoration: underline black;" href="https://www.breakingbadapi.com/documentation" target="_blank"><p>Api de referencia</p></a>
            </form>
        </article>

        <article class="articuloREST" class="apiNASA">
            <h3>API NASA</h3>
            <form class="rest"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div id="respuestarest">
                    <p id="titulorest"><?php echo $tituloEnCurso ?></p>
                    <img width="30%" src="<?php echo $imagenEnCurso ?>">
                    <p><?php echo $descripcionEnCurso ?></p>
                </div>
                <input id="fechaR" type="date" name="fecha" value="<?php echo date('Y-m-d') ?>"/>

                <div>
                    <button class="button" id="botonAPI" type="submit" name="Aceptar1"><?php echo $aLang[$_COOKIE['idioma']]['accept']; ?></button>
                    <button class="button" id="botonAPI2" type="submit" name="Cancelar"><?php echo $aLang[$_COOKIE['idioma']]['cancel']; ?></button>
                </div>
            </form>  
        </article>

        <article class="articuloREST" class="apiNASA">
            <h3>API LYRICS</h3>
            <form class="rest"  action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <label for="CodUsuario"><?php echo "Artista" ?></label>
                <input type="text" placeholder="EJ: Chayanne" name="nombreArt"/>
                <br><br>
                <label for="CodUsuario"><?php echo "Cancion"; ?></label>
                <input type="text" placeholder="EJ: Torero" name="tituloSong"/>
                <br><br>
                <button class="button" id="botonAPI" type="submit" name="Aceptar3"><?php echo $aLang[$_COOKIE['idioma']]['accept']; ?></button>
                <button class="button" id="botonAPI2" type="submit" name="Cancelar"><?php echo $aLang[$_COOKIE['idioma']]['cancel']; ?></button>
            </form>
            <a style="color:black; text-decoration: underline black;" href="https://lyricsovh.docs.apiary.io/#" target="_blank">Api de Referencia</a>
            <pre><?php echo $letraEnCurso ?></pre>
        </article>
    </main>
</html>