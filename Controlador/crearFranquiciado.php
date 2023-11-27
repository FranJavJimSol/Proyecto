<?php

require '../Modelo/usuarioModel.php';
require '../Modelo/estanteModel.php';

if (isset($_POST['creaf'])) {
// Declaración de variables y objetos;
    $usuario = new usuarioModel();
    $usuario->setId($_POST['id']);
    $usuario->setNombre($_POST['nombre']);
    $usuario->setApellido1($_POST['apellido1']);
    $usuario->setApellido2($_POST['apellido2']);
    $usuario->setEmail($_POST['email']);
    $usuario->setPassword($_POST['password']);
    $usuario->setTelefono1($_POST['telefono1']);
    $usuario->setTelefono2($_POST['telefono2']);
    $usuario->setTipoVia($_POST['via']);
    $usuario->setNombreVia($_POST['nVia']);
    $usuario->setNumero($_POST['numeroVivienda']);
    $usuario->setEscalera($_POST['escalera']);
    $usuario->setPiso($_POST['piso']);
    $usuario->setLetra($_POST['letraVivienda']);
    $usuario->setCp($_POST['cp']);
    $usuario->setRol($_POST['rol']);

    // Si el usuario en un determinado rol existe.
    if ($usuario->usuarioExiste($usuario) == false && $usuario->getRol() == "2") {

        $estante = new estanteModel();
        // Llamada para saber la ultima id de la tabla estantes.
        $Uid = $estante->ultimaId();

        for ($i = 0; $i < $_POST['estante0']; $i++) {
            $Uid++; // Autoincremental tabla estante
            $e = new estanteModel(($Uid), $usuario->setId($_POST['id']), 'xl');
            var_dump($e);
        }



        session_start();
        $_SESSION['franquiciado'] = $usuario; // Sesion creada con datos franquiciado
        header('Location: ../Vista/vistaConfirmarUsuario.php'); // A vista de confirmar
        // inserto en el sitio
        /* for ($i = 0; $i < $_POST['xl']; $i++) {
          $usuario->insertarElementosAlquiler($_POST['id'], 'xl'); */
    } else {
        
    }
    /* for ($i = 0; $i < $_POST['xl']; $i++) {
      $usuario->insertarElementosAlquiler($_POST['id'], 'l');
      }
      for ($i = 0; $_POST['m']; $i++) {
      $usuario->insertarElementosAlquiler($_POST['id'], 'm');
      }
      for ($i = 0; $i < $_POST['xs']; $i++) {
      $usuario->insertarElementosAlquiler($_POST['id'], 'xs');
      }
      for ($i = 0; $i < $_POST['Tq']; $i++) {
      $usuario->insertarElementosAlquiler($_POST['id'], 'taquilla');
      }
      } else {
      // A error de usuario existe
      }


      $link = $usuario->conectarInicio();
      // Elementos de alquiler.


      // Elementos consumibles.
      $cinta = $_POST['cinta'];
      $manta = $_POST['manta'];
      $plastico = $_POST['plastico'];
      $c1 = $_POST['c1'];
      $c2 = $_POST['c2'];
      $c3 = $_POST['c3'];

      $consulta = new consultasUsuarioModel();
      // Insercion de franquiciado
      $consulta->CreaUsuario($usuario);
      // Insercion de elementos de alquiler */
}