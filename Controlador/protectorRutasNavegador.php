<?php
//Proteccion de ruta en navegador
require '../Modelo/usuarioModel.php';
if (!isset($_SESSION['administrador'])&!isset($_SESSION['cliente'])&!isset($_SESSION['usuario'])) {
    header('Location: ../index.php');
}

