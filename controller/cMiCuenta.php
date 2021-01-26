<?php

if (isset($_REQUEST['Cancelar'])) {
    $_SESSION['paginaEnCurso'] = $controladores['inicio']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del login
    header('Location: index.php');
    exit;
}

if (isset($_REQUEST['cerrarSesion'])) { // si se ha pulsado el boton de Cerrar Sesion
    session_destroy(); // destruye todos los datos asociados a la sesion
    header("Location: index.php"); // redirige al login
    exit;
}

define("OBLIGATORIO", 1);

$entradaOK = true;

$aErrores = [//declaro e inicializo el array de errores
    'DescUsuario' => null
];

if (isset($_REQUEST["Aceptar"])) { // comprueba que el usuario le ha dado a al boton de IniciarSesion y valida la entrada de todos los campos
    
    $aErrores['DescUsuario'] = validacionFormularios::comprobarAlfaNumerico($_REQUEST['DescUsuario'], 255, 3, OBLIGATORIO); // comprueba que la entrada del codigo de usuario es correcta


    foreach ($aErrores as $campo => $error) { // recorro el array de errores
        if ($error != null) { // compruebo si hay algun mensaje de error en algun campo
            $entradaOK = false; // le doy el valor false a $entradaOK
            $_REQUEST[$campo] = ""; // si hay algun campo que tenga mensaje de error pongo $_REQUEST a null
        }
    }
} else {
    $entradaOK = false; //Cambiamos el valor de la variable porque no se ha pulsado el botón 
}

if ($entradaOK) { // si la entrada esta bien recojo los valores introducidos y hago su tratamiento
    
    $oUsuario = UsuarioPDO::editarUsuario($_REQUEST['CodUsuario'], $_REQUEST['DescUsuario']);
    $_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'] = $oUsuario; // guarda en la session el objeto usuario
    $_SESSION['paginaEnCurso'] = $controladores['inicio']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del inicio

    header('Location: index.php'); // redirige al index.php
    exit;
}

$vista = $vistas['miCuenta'];
require_once $vistas['layout'];
?>