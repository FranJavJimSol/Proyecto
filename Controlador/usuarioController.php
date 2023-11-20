<?php

require '../Modelo/usuarioModel.php';
require '../Modelo/verificaInputsModel.php';

if (isset($_POST['login'])) {
    $nombre = $_POST['nombre'];
    $password = $_POST['password'];
    // Crea objeto para acceder a metodos validación
    $v = new verificaInputsModel();
    $n = $v->ValidaLoginNombre($nombre);
    $p = $v->ValidaLoginPassword($password);

    if ($n == true && $p == true) {

        $vUsuario = new usuarioModel();
        $vUsuario->setNombre($nombre);
        $vUsuario->setPassword($password);

        // Con toda la validación vamos a bbdd y creamos session
        $u = $vUsuario->CreaUsuario($vUsuario);
        
        // Que usuario crea session.
        if ($u->getRol() === "1") {
            session_start();
            $_SESSION['administrador'] = $u; // Sesion creada // TO DO Identificador
            header('Location: ../Vista/vistaFormularioCrearUsuario.php');
                       
        } else if ($vUsuario->getRol() === "2") {
            session_start();
            $_SESSION['cliente'] = $u; // Sesion creada
            require '../Vista/usuarioVista.php';
            session_write_close();
            
        } else if ($vUsuario->getRol() === "3") {
            session_start();
            $_SESSION['usuario'] = $u; // Sesion creada
            require '../Vista/clienteVista.php';
            session_write_close();
        }
    } else {
        header('location : index.php');
        // error validacion de login
    }

}
