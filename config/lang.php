<?php
if(isset($_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'])){
    $usuarioActual = $_SESSION['usuarioDAW2LoginLogoffMulticapaPOO'];
}

$aLang = [
    'es'=> [
        'user' => 'Usuario',
        'description' => 'Descripcion',
        'password' => 'Contraseña',
        'login' => 'Iniciar Sesion',
        'signup' => 'Registrarse',

        'title' => 'Programa',
        'logoff' => 'Cerrar Sesion',
        'welcome' => 'Bienvenido/a '.(isset($usuarioActual) ? $usuarioActual->getDescUsuario() : null),
        'numConnections' => 'Esta es la vez numero '.(isset($usuarioActual) ? $usuarioActual->getNumConexiones() : null).' que se conecta',
        'numConnectionsWelcome' => 'Esta es la primera vez que se conecta',  
        'lastConnection' => 'Su ultima conexion fue el dia '.(isset($usuarioActual) ? date('d/m/Y',$usuarioActual->getFechaHoraUltimaConexion()) . ' a las ' . date('H:i:s',$usuarioActual->getFechaHoraUltimaConexion()) : null),
        'details' => 'Detalle',
        'editProfile' => 'Editar Perfil',
        'typeUser' => 'Tipo de Usuario',
        'numConn' => 'Numero de Conexiones',
        'lastConn' => 'Ultima Conexion',
        'deleteAcc' => 'Borrar Cuenta',
        'confirmPassword' => 'Confirmar Contraseña',
        'rest' => 'REST',
        'home' => 'Inicio',
        'showPass' => 'Mostrar Contraseña',
        
        'accept' => 'Aceptar',
        'cancel' => 'Cancelar'
    ],

    'en' => [
        'user' => 'User',
        'description' => 'Description',
        'password' => 'Password',
        'login' => 'Login',
        'signup' => 'Sign Up',

        'title' => 'Program',
        'logoff' => 'Log Out',
        'welcome' => 'Welcome '.(isset($usuarioActual) ? $usuarioActual->getDescUsuario() : null),
        'numConnections' => 'You have connected '.(isset($usuarioActual) ? $usuarioActual->getNumConexiones() : null).' times',
        'numConnectionsWelcome' => 'This is the first time you connect',  
        'lastConnection' => 'Last connection: '.(isset($usuarioActual) ? date('d/m/Y H:i:s',$usuarioActual->getFechaHoraUltimaConexion()) : null),
        'details' => 'Detail',
        'editProfile' => 'Edit Profile',
        'typeUser' => 'User Type',
        'numConn' => 'Number of connections',
        'lastConn' => 'Last Connection',
        'deleteAcc' => 'Delete Account',
        'confirmPassword' => 'Confirm Password',
        'rest' => 'REST',
        'home' => 'Home',
        'showPass' => 'Show Password',
        
        'accept' => 'Accept',
        'cancel' => 'Cancel'
    ]
];
?>