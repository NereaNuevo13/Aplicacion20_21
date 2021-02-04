<html>
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;1,300&family=Sriracha&display=swap" rel="stylesheet">
    </head>
    <body id="bodyLog">
        <header>
            <h1 class="inicioSesion">APP LOG IN / LOG OUT</h1>
        </header>
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

                <button class="button" id="inicioSesion" type="submit" name="IniciarSesion"><?php echo $aLang[$_COOKIE['idioma']]['login']; ?></button>
                <p>──────── <span>O</span> ────────</p>
                <p class="noCuenta">¿No tienes cuenta?</p>
                <button class="button" id="registroInicio" type="submit" name="Registrarse"><?php echo $aLang[$_COOKIE['idioma']]['signup']; ?></button>

            </form>
        </main>
    </body>
</html>