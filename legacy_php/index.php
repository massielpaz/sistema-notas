<?php

// Librerias y archivos PHP adicionales


require_once __DIR__ . '/php/redirect.php';


// Metodo nesesario para que la variable $_SESSION registre datos y guarde la informacion de inicio de sesion.
session_start();

// La sesion del usuario es guardada dentro de $_SESSION dentro de user_session, este valor es asignado al comprobar el usuario. 
$user_inicio_sesion = isset($_SESSION['user_session']) ? $_SESSION['user_session'] : null;

/**
 * El usuario NO inicio sesion, se le redirecciona a la pagina login.php para guardar la sesion
 */
if (!$user_inicio_sesion) {
    ridireccionar_url("/login.php");
    return;
}

/**
 * El usuario ya inicio sesion, se muestra la pagina de inicio predeterminada
 */


echo "Aun falta";
