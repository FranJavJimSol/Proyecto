<?php

require 'conexion.php';
session_start();

class accesoDDBB extends conexion {
    /* Consulta de usuario existe en bbdd */

    public function usuarioExisteDDBB($email) { // Filtro por email
        $link = parent::conectarInicio();
        if (!($sentencia = $link->prepare("SELECT * FROM usuario_inicial WHERE ui_email = ?")
                )) {// Mandar a pagina de error "Fallo conexion"
            echo "Falló la preparación :(" . $link->errno . ")" . $link->error;
        }
        if (!($sentencia->bind_param('s', $email))) {// Mandar a pagina de error "Fallo conexion"
            echo "Falló la vinculación de parametros :(" . $sentencia->errno . ")" . $sentencia->error;
        }
        if (!$sentencia->execute()) {// Mandar a pagina de error "Fallo conexion"
            echo "Fallo la ejecución:(" . $sentencia->errno . ")" . $sentencia->errno;
        }
        $resultado = $sentencia->get_result();
        if ($resultado->num_rows < 1) {
            $resultado->close();
            $link->close();
            return false;
        } else {
            $resultado->close();
            $link->close();
            return true;
        }
    }

    /* Consulta de validación hash en bbdd */

    public function validaPassword_HashDDBB($email, $password) { // Filtro por email
        $link = parent::conectarInicio();
        if (!($sentencia = $link->prepare("SELECT ui_password,ui_rol FROM usuario_inicial WHERE ui_email = ?")
                )) {// Mandar a pagina de error "Fallo conexion"
            echo "Falló la preparación :(" . $link->errno . ")" . $link->error;
        }
        if (!($sentencia->bind_param('s', $email))) {// Mandar a pagina de error "Fallo conexion"
            echo "Falló la vinculación de parametros :(" . $sentencia->errno . ")" . $sentencia->error;
        }
        if (!$sentencia->execute()) {// Mandar a pagina de error "Fallo conexion"
            echo "Fallo la ejecución:(" . $sentencia->errno . ")" . $sentencia->errno;
        }
        $resultado = $sentencia->get_result();
        if ($resultado->num_rows < 1) {
            // Mandar a pagina de error "usuario no registrado"
            echo 'Usuario no encontrado';
            $resultado->close();
            $link->close();
            return false;
        } else {
            $password_hash;
            $rol;
            while ($fila = $resultado->fetch_assoc()) {
                $password_hash = $fila["ui_password"];
                $rol = $fila["ui_rol"];
            }
            $resultado->close();
            $link->close();
            if (password_verify($password, $password_hash)) {
                return $rol;
            } else {
                return false;
            }
        }
    }

    public function agregarACesta($param) {
// Session con la cesta
        array_push($_SESSION['cesta'], $param);
        var_dump($_SESSION['cesta']);
        header('Location: ../Modulos/consumibles2.php');
        
    }
}
