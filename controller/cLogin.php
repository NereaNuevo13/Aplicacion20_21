<?php

/**
 *   @author: Javier Nieto Lorenzo
 *   @since: 02/12/2020
 *   cInicio
 */
if (!isset($_COOKIE['idioma'])) {
    setcookie('idioma', 'es', time() + 2592000); // crea la cookie 'idioma' con el valor 'es' para 30 dias
    header('Location: index.php');
    exit;
}

if (isset($_REQUEST['idiomaElegido'])) { // si se ha pulsado el botton de cerrar sesion
    setcookie('idioma', $_REQUEST['idiomaElegido'], time() + 2592000); // modifica la cookie 'idioma' con el valor recibido del formulario para 30 dias
    header('Location: index.php');
    exit;
}

if (isset($_REQUEST['Registrarse'])) { // si se ha pulsado el boton de registrarse
    $_SESSION['paginaEnCurso'] = $controladores['registro']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del registro

    header('Location: index.php');
    exit;
} else {

    define("OBLIGATORIO", 1);

    $entradaOK = true;

//Array de errores
    $aErrores = [
        'CodUsuario' => null,
        'Password' => null
    ];

//Comprueba que el usuario le ha dado al boton de IniciarSesion y valida la entrada de todos los campos
    if (isset($_REQUEST["IniciarSesion"])) {
        $aErrores['CodUsuario'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['CodUsuario'], 15, 3, OBLIGATORIO);

        $aErrores['Password'] = validacionFormularios::validarPassword($_REQUEST['Password'], 8, 1, 1, OBLIGATORIO);

        $oUsuario = UsuarioPDO::validarUsuario($_REQUEST['CodUsuario'], $_REQUEST['Password']);

        if (!isset($oUsuario)) {
            $aErrores['CodUsuario'] = "El codigo de usuario no se encuentra en la base de datos";
        }

        //Comprueba si hay algún mensaje de error en algún campo
        if ($aErrores['CodUsuario'] != null || $aErrores['Password'] != null) {
            //Asigna el valor false a $entradaOK
            $entradaOK = false;
            unset($_REQUEST);
        }
//Si el usuario no le ha dado al botón de enviar
    } else {
        //Asigna el valor false a $entradaOK
        $entradaOK = false;
    }

//Si la entrada es correcta, trata los valores recogidos por el formulario
    if ($entradaOK) {
        
        //Guarda en la sesión el objeto usuario y redirige al index
        $_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'] = $oUsuario;
        $_SESSION['paginaEnCurso'] = $controladores['inicio'];
        
        header('Location: index.php');
        
        exit;
    }

//Guarda en la variable vistaEnCurso la vista a implementar
    $vista = $vistas['login'];
    
//Se incluye la vista que contiene la $vistaEnCurso    
    require_once $vistas['layout'];
}