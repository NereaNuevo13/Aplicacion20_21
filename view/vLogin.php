<html>
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,300&family=Sriracha&display=swap" rel="stylesheet">
    </head>
    <body id="bodyLog">
        <header>
            <h1 class="inicioSesion">APP LOG IN / LOG OUT</h1>
        </header>
        <div class="divDoc2" >
            <a href="doc/201129CatalogoDeRequisitos.pdf" target="_blank"><img src="webroot/media/num1.png" class="divDoc" width="200" height="200"></a>
            <a href="doc/210102DiagramaDeCasosDeUso.pdf" target="_blank"><img src="webroot/media/num2.png" class="divDoc" width="200" height="200"></a><br>
            <a href="doc/DiagramaDeClases.pdf" target="_blank"><img src="webroot/media/DiagramaClases1.png" class="divDoc" width="200" height="200"></a>
            <a href="doc/210102ArbolDeNavegación.pdf" target="_blank"><img src="webroot/media/num3.png" class="divDoc" width="200" height="200"></a><br>
            <a href="doc/210102RelacionDeFicheros.pdf" target="_blank"><img src="webroot/media/num4.png" class="divDoc" width="200" height="200"></a>
            <a href="doc/201127ModeloFisicoDeDatos20-21.pdf" target="_blank"><img src="webroot/media/num6.png" class="divDoc" width="200" height="200"></a>
        </div>
        <main class="vLogin">
            <form name="formularioIdioma" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <button <?php echo ($_COOKIE['idioma'] == "es") ? "style='color: black;'" : null; ?> class="idioma " type="submit" name="idiomaElegido" value="es"> Castellano</button>
                <button <?php echo ($_COOKIE['idioma'] == "en") ? "style='color: black;'" : null; ?> class="idioma" type="submit" name="idiomaElegido" value="en"> English</button>
            </form>

            <form id="formVLOGIN" name="login" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <h1 class="titLogin">LOGIN</h1>
                <div>
                    <input class="required" type="text" id="CodUsuario" name="CodUsuario" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['user']; ?>" value="<?php
                    echo (isset($_REQUEST['CodUsuario'])) ? $_REQUEST['CodUsuario'] : null;
                    ?>">
                </div>
                <div>
                    <input class="required" type="password" id="Password" name="Password" value="<?php
                    echo (isset($_REQUEST['Password'])) ? $_REQUEST['Password'] : null;
                    ?>" placeholder="<?php echo $aLang[$_COOKIE['idioma']]['password']; ?>">
                </div>
                <table class="tablaLogin">
                    <tr>
                        <td><input style="margin-left: -20px" type="checkbox" onclick="validarCheck()" id="checkBox" value="checkbox"></td>
                        <td><span style="margin-left: -80px"><?php echo $aLang[$_COOKIE['idioma']]['showPass']; ?></span></td>
                    </tr>
                </table>

                <button class="button" id="inicioSesion" type="submit" name="IniciarSesion"><?php echo $aLang[$_COOKIE['idioma']]['login']; ?></button>
                <p class="dividirLogin"></p>
                <p class="noCuenta">¿No tienes cuenta?</p>
                <button class="button" id="registroInicio" type="submit" name="Registrarse"><?php echo $aLang[$_COOKIE['idioma']]['signup']; ?></button>
            </form>
        </main>
    </body>
</html>