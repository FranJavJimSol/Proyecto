<?php

require '../Modelo/consultasUsuarioModel.php';
session_start();
$_SESSION['administrador'];

if ($_SESSION['administrador']->getRol() == 1) {
    var_dump($_SESSION);
    
} else {
    // A errores no hay session
}


