<?php

require '../Modelo/usuarioModel.php';
require '../Modelo/authenticate.php';
//require '../Modelo/Email.php';


/* LOGIN */
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    /* validación formato */
    $v = new Authenticate();
    $n = $v->ValidEmail($email);
    $p = $v->ValidaLoginPassword($password);

    if ($n == true && $p == true) {
        // Creacion de usuario
        $vUsuario = new usuarioModel();
        $vUsuario->setEmail($email);
        $vUsuario->setPassword($password);

        // ¿existe el usuario?
        if ($vUsuario->usuarioExiste()) {
            $value = $vUsuario->validaPassword_Hash();
            // La contraseña es la de BBDD
            switch ($value) {
                case "1":
                    $vUsuario->setRol($value); //insertamos el rol al usuario
                    $_SESSION['administrador'] = $vUsuario;
                    header('Location: ../Vista/vistaOpcionesAdministrador.php');
                    break;
                case "2":
                    $vUsuario->setRol($value);
                    $_SESSION['cliente'] = $vUsuario;
                    break;
                case "3":
                    $vUsuario->setRol($value);
                    $_SESSION['usuario'] = $vUsuario;
                    header('Location: ../Vista/vistaOpcionesCliente.php');
                    break;
                default:
                // A excepciones contraseña incorrecta
            }
        } else {
            // A excepciones usuario no existe
            echo 'usuario no existe';
        }
    }
}
/* LOGIN */

/* FORMULARIOS SIN SESSION */
if (isset($_POST['alquilaTaquilla']) ||
        isset($_POST['alquilaXS']) ||
        isset($_POST['alquilaL']) ||
        isset($_POST['alquilaXL']) ||
        isset($_POST['alquilaXXL']) ||
        isset($_POST['alquilaLeja']) ||
        isset($_POST['compraCandado']) ||
        isset($_POST['compraCaja']) ||
        isset($_POST['compraManta']) ||
        isset($_POST['compraPlastico']) ||
        isset($_POST['compraPlastico'])) {
    if (isset($_SESSION)) {// Comprueba si hay un usuario en session.
        if (isset($_POST['alqTaq'])) {
            
        }
        if (isset($_POST['alqXS'])) {
            
        }
        if (isset($_POST['alqL'])) {
            
        }
        if (isset($_POST['alqXL'])) {
            
        }
        if (isset($_POST['alqXXL'])) {
            
        }
        if (isset($_POST['alqEs'])) {
            
        }

        if (isset($_POST['candado'])) {
            
        }
        if (isset($_POST['caja'])) {
            
        }
        if (isset($_POST['manta'])) {
            
        }
        if (isset($_POST['plastico'])) {
            
        }
        if (isset($_POST['cinta'])) {
            
        }


        header('Location: ../Vista/vistaCesta.php');
    } else {// Si no vamos al login
        header('Location: ../Vista/vistaFormularioLogin.php');
    }
}
/* FORMULARIOS SIN SESSION */


/* CREACIÓN DE USUARIO POR PROPIO USUARIO */
if (isset($_POST['nuevoUsuarioInicial'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $v = new verificaInputsModel();
    $n = $v->ValidEmail($email);
    $p = $v->ValidaLoginPassword($password);

    if ($n == true && $p == true) {

        $vUsuario = new usuarioModel();
        $vUsuario->setEmail($email);
        // Encriptar contraseña
        $contraseña_encriptada = password_hash($password, algo: PASSWORD_DEFAULT);

        $vUsuario->setPassword($contraseña_encriptada);
        $vUsuario->setRol("3");
        if ($vUsuario->usuarioExiste()) {
            // Mandar a excepciones.
            header('Location: ');
        } else {
            $vUsuario->insertarUsuarioInicial($vUsuario);
            // Mandar email de confirmación. 
            /* $mensagge = "Te has registrado en Trashtero.es ya puedes acceder a nuestros productos";
              $to = $vUsuario->getEmail($email);
              $from = "admintrashtero@trashtero.es";
              $subject = "Registro trashtero.es";
              $email = new Email($from, $to, $subject, $message);
              $email->send(); */
            header('Location: ../Vista/vistaFormularioLogin.php');
        }
    }
}
    