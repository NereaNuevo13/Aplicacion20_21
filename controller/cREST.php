<?php

/**
 * @author Susana Fabián Antón
 * @since 26/01/2021
 * @version 26/01/2021
 */

if (isset($_REQUEST['cerrarSesion'])) { // si se ha pulsado el boton de Cerrar Sesion
    session_destroy(); // destruye todos los datos asociados a la sesion
    header("Location: index.php"); // redirige al login
    exit;
}

if (isset($_REQUEST['Cancelar'])) {
    $_SESSION['paginaEnCurso'] = $controladores['inicio']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del inicio
    header('Location: index.php');
    exit;
}

if (isset($_REQUEST['editarPerfil'])) { // si se ha pulsado el boton de registrarse
    $_SESSION['paginaEnCurso'] = $controladores['miCuenta']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del registro
    
    header('Location: index.php');
    exit;
}

if (isset($_REQUEST['borrarCuenta'])) { // si se ha pulsado el boton de registrarse
    $_SESSION['paginaEnCurso'] = $controladores['deleteAccount']; // guardamos en la variable de sesion 'pagina' la ruta del controlador del registro
    
    header('Location: index.php');
    exit;
}

$titulo = "REST";
if (isset($_REQUEST['Volver'])) { // si se ha pulsado el botón de editar perfil
    $_SESSION['paginaEnCurso'] = $controladores['inicio']; //guardamos en la sesión el controlador que debe ejecutarse
    header('Location: index.php'); //enviamos al usuario de vuelta al index
    exit;
}

if (isset($_REQUEST['Aceptar1'])) { //si se ha enviado una fecha
    //llamamos al servicio y le pasamos la fecha introducida por el usuario
    $aServicioAPOD = REST::sevicioAPOD($_REQUEST['fecha']);
} else {
    //llamamos al servicio y le pasamos la fecha de hoy
    $aServicioAPOD = REST::sevicioAPOD(date('Y-m-d'));
}
if (is_null($aServicioAPOD)) {
    $tituloEnCurso = "¡Petición incorrecta o demasiadas peticiones!";
    $imagenEnCurso = null;
    $descripcionEnCurso = null;
} else {
    $tituloEnCurso = $aServicioAPOD['title'];
    $imagenEnCurso = $aServicioAPOD['url'];
    $descripcionEnCurso = $aServicioAPOD['explanation'];
}

//WEB SERVICE NEREA AJ

if (isset($_REQUEST['Aceptar2'])) { //si se ha enviado una fecha
    //llamamos al servicio y le pasamos la fecha introducida por el usuario
    $ValoresActor = REST::actorBB($_REQUEST['numero']);
} else {
    $ValoresActor = null;
}
if (is_null($ValoresActor)) {
    $nombrePersonaje = null;
    $cumpleaños = null;
    $imagen = null;
    $estado = null;
    $apodo = null;
    $actor = null;
    $categoria = null;
    
} else {
    $nombrePersonaje = $ValoresActor[0]['name'];
    $cumpleaños = $ValoresActor[0]['birthday'];
    $imagen = $ValoresActor[0]['img'];
    $estado = $ValoresActor[0]['status'];
    $apodo = $ValoresActor[0]['nickname'];
    $actor = $ValoresActor[0]['portrayed'];
    $categoria = $ValoresActor[0]['category'];
}

//WEB SERVICE NEREA NP

if (isset($_REQUEST['Aceptar3'])) { //si se ha enviado una fecha
    //llamamos al servicio y le pasamos la fecha introducida por el usuario
    $ValoresArtista = REST::songLyrics($_REQUEST['nombreArt'],$_REQUEST['tituloSong']);
} else {
    $ValoresArtista = null;
}

if (is_null($ValoresArtista)) {
    $letraEnCurso = "NO SE HA ENCONTRADO ESA LETRA DE CANCION";
    
} else {
    $letraEnCurso = $ValoresArtista['lyrics'];
}


$vista = $vistas['rest']; // guardamos en la variable vistaEnCurso la vista que queremos implementar

require_once $vistas['layout'];