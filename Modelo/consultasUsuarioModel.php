<?php

require 'usuarioModel.php';

class consultasUsuarioModel extends usuarioModel {

// --------------------------------------------------------------------------REGISTROS--------------------------------------------------------------------
// Administrador del sistema
    public function CreaUsuario($user) {
        
        $u = strtolower(str_replace(' ', '', $user->getNombre()));
        $p = $user->getPassword();
        $link = parent::conectarInicio(); // Conexión llamando al método del padre del que hereda
        if (!($sentencia = $link->prepare("SELECT * FROM inicio WHERE ini_nombre = ? AND ini_password = ?")
                )) {// Mandar a pagina de error "Fallo conexion"
            echo "Falló la preparación :(" . $link->errno . ")" . $link->error;
        }
        if (!($sentencia->bind_param('ss', $u, $p))) {// Mandar a pagina de error "Fallo conexion"
            echo "Falló la vinculación de parametros :(" . $sentencia->errno . ")" . $sentencia->error;
        }
        if (!$sentencia->execute()) {// Mandar a pagina de error "Fallo conexion"
            echo "Fallo la ejecución:(" . $sentencia->errno . ")" . $sentencia->errno;
        }
        $resultado = $sentencia->get_result();

        if ($resultado->num_rows < 1) {
            // Mandar a pagina de error "usuario no registrado"
            echo 'Usuario no registrado';
            $resultado->close();
        } else {
            while ($fila = $resultado->fetch_assoc()) {
                $user->setId($fila["ini_id"]);
                $user->setApellido1($fila["ini_apellido1"]);
                $user->setApellido2($fila["ini_apellido2"]);
                $user->setEmail($fila["ini_email"]);
                $user->setTelefono1($fila["ini_telefono1"]);
                $user->setTelefono2($fila["ini_telefono2"]);
                $user->setTipoVia($fila["ini_tipoVia"]);
                $user->setNombreVia($fila["ini_nombreVia"]);
                $user->setNumero($fila["ini_numero"]);
                $user->setEscalera($fila["ini_escalera"]);
                $user->setPiso($fila["ini_piso"]);
                $user->setLetra($fila["ini_letra"]);
                $user->setCp($fila["ini_cp"]);
                $user->setRol($fila["ini_rol"]);
            }
            $resultado->close();
            return $user;
        }
    }

    /* private function updateUsuario($user): void {

      $link = parent::conectarInicio(); // Conexión llamando al método del padre del que hereda
      if (!($sentencia = $link->prepare("UPDATE inicio SET ini_activo = ? WHERE ini_id = ?")
      )) {// Mandar a pagina de error "Fallo conexion"
      echo "Falló la preparación :(" . $link->errno . ")" . $link->error;
      }
      if (!($sentencia->bind_param('is', $a, $id))) {// Mandar a pagina de error "Fallo conexion"
      echo "Falló la vinculación de parametros :(" . $sentencia->errno . ")" . $sentencia->error;
      }
      if (!$sentencia->execute()) {// Mandar a pagina de error "Fallo conexion"
      echo "Fallo la ejecución:(" . $sentencia->errno . ")" . $sentencia->errno;
      }

      $sentencia->close();
      } */
}

// --------------------------------------------------------------------------REGISTROS--------------------------------------------------------------------
