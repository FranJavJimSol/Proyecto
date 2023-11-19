<?php
//Proteccion de ruta en navegador
session_start();
if (!isset($_SESSION['administrador'])) {
    session_destroy();
    header('Location: ../index.php');
}

