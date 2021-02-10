<html>
    <header>
        <h1 class="inicioSesion">APP LOG IN / LOG OUT</h1>
        <div class="buttons-header-inicio">
            <!--
            <a href="detalle.php"><button class="button-inicio" name="Detalle"> <?php echo $aLang[$_COOKIE['idioma']]['details']; ?></button></a>
            <a href="editarPerfil.php"><button class="button-inicio" name="EditarPefil"> <?php echo $aLang[$_COOKIE['idioma']]['editProfile']; ?></button></a>
            -->
            <?php echo ($usuarioActual->getImagenPerfil() != null) ? '<img id="fotoPerfil" src = "data:image/png;base64,' . base64_encode($usuarioActual->getImagenPerfil()) . '" alt="Foto de perfil"/>' : "<img id='fotoPerfil' src='webroot/media/imagen_perfil2.png' alt='imagen_perfil'/>"; ?>
            <form name="logout" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <button class="logout" type="submit" name='inicioApp'><?php echo $aLang[$_COOKIE['idioma']]['home']; ?></button>
                <button class="logout" type="submit" name='cerrarSesion'><?php echo $aLang[$_COOKIE['idioma']]['logoff']; ?></button>
            </form>
        </div>

    </header>
    <body id="bodyLog">
        <main class="main-container-inicio" class="flex-container-align-item-center" class="vLogin">
            <article class="articuloEditar">
                <form name="logout" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <h1 class="editPerf">EDITAR PERFIL</h1>
                    
                    <label for="CodUsuario" class="labelEditar"><?php echo $aLang[$_COOKIE['idioma']]['user']; ?></label>
                    <input type="text" id="CodUsuario" name="CodUsuario" class="lectura" value="<?php echo $CodUser ?>" readonly/>

                    <br>

                    <label for="DescUsuario" class="labelEditar"><?php echo $aLang[$_COOKIE['idioma']]['description']; ?></label>
                    <input type="text" id="DescUsuario" name="DescUsuario" class="descUsua"value="<?php echo $DescUser ?>" write/>

                    <br>

                    <label for="Perfil" class="labelEditar"><?php echo $aLang[$_COOKIE['idioma']]['typeUser']; ?></label>
                    <input type="text" id="Perfil" name="Perfil"  class="lectura"value="<?php echo $Profile ?>" readonly/>

                    <br>

                    <label for="Conexiones" class="labelEditar"><?php echo $aLang[$_COOKIE['idioma']]['numConn']; ?></label>
                    <input type="number" id="Conexiones" name="Conexiones" value="<?php echo $ConexNumber ?>" readonly/>

                    <br>

                    <label for="Ultima" class="labelEditar"><?php echo $aLang[$_COOKIE['idioma']]['lastConn']; ?></label>
                    <input type="datetime" id="Ultima" name="Ultima" value="<?php echo $LastDateConex ?>" readonly/>

                    <br>

                    <button class="button" id="aceptarSesion" type="submit" name="Aceptar"><?php echo $aLang[$_COOKIE['idioma']]['accept']; ?></button>    
                    <button class="button" id="inicioSesion" type="submit" name="Cancelar"><?php echo $aLang[$_COOKIE['idioma']]['cancel']; ?></button>
                    <button class="button" id="registroInicio" type="submit" name='borrarCuenta'><?php echo $aLang[$_COOKIE['idioma']]['deleteAcc']; ?></button> 
                </form>
            </article>
        </main>
    </body>
</html>