<?php

require 'conexion.php';

class usuarioModel extends conexion {

    protected $id; // Dni o Cif
    protected $nombre;
    protected $apellido1;
    protected $apellido2;
    protected $email;
    protected $password;
    protected $telefono1;
    protected $telefono2;
    protected $tipoVia;
    protected $nombreVia;
    protected $numero;
    protected $escalera;
    protected $piso;
    protected $letra;
    protected $cp;
    protected $rol;

    public function __construct() {

        $this->id;
        $this->nombre;
        $this->apellido1;
        $this->apellido2;
        $this->email;
        $this->password;
        $this->telefono1;
        $this->telefono2;
        $this->tipoVia;
        $this->nombreVia;
        $this->numero;
        $this->escalera;
        $this->piso;
        $this->letra;
        $this->cp;
        $this->rol;
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellido1() {
        return $this->apellido1;
    }

    public function getApellido2() {
        return $this->apellido2;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getTelefono1() {
        return $this->telefono1;
    }

    public function getTelefono2() {
        return $this->telefono2;
    }

    public function getTipoVia() {
        return $this->tipoVia;
    }

    public function getNombreVia() {
        return $this->nombreVia;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getEscalera() {
        return $this->escalera;
    }

    public function getPiso() {
        return $this->piso;
    }

    public function getLetra() {
        return $this->letra;
    }

    public function getCp() {
        return $this->cp;
    }

    public function getRol() {
        return $this->rol;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    public function setApellido1($apellido1): void {
        $this->apellido1 = $apellido1;
    }

    public function setApellido2($apellido2): void {
        $this->apellido2 = $apellido2;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }

    public function setTelefono1($telefono1): void {
        $this->telefono1 = $telefono1;
    }

    public function setTelefono2($telefono2): void {
        $this->telefono2 = $telefono2;
    }

    public function setTipoVia($tipoVia): void {
        $this->tipoVia = $tipoVia;
    }

    public function setNombreVia($nombreVia): void {
        $this->nombreVia = $nombreVia;
    }

    public function setNumero($numero): void {
        $this->numero = $numero;
    }

    public function setEscalera($escalera): void {
        $this->escalera = $escalera;
    }

    public function setPiso($piso): void {
        $this->piso = $piso;
    }

    public function setLetra($letra): void {
        $this->letra = $letra;
    }

    public function setCp($cp): void {
        $this->cp = $cp;
    }

    public function setRol($rol): void {
        $this->rol = $rol;
    }

    public function usuarioExiste($u) {
        $id = $u->getId();
        $link = parent::conectarInicio();
        if (!($sentencia = $link->prepare("SELECT * FROM inicio WHERE ini_id = ?")
                )) {// Mandar a pagina de error "Fallo conexion"
            echo "Falló la preparación :(" . $link->errno . ")" . $link->error;
        }
        if (!($sentencia->bind_param('s', $id))) {// Mandar a pagina de error "Fallo conexion"
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

    public function insertarUsuarioFranquiciado($u) {
        $link = $this->conectarInicio();
        if (!($sentencia = $link->prepare("INSERT INTO inicio (ini_id,ini_nombre,ini_apellido1,"
                . "ini_apellido2,ini_email,ini_password,ini_telefono1,ini_telefono2,ini_tipoVia,"
                . "ini_nombreVia,ini_numero,ini_escalera,ini_piso,ini_letra,ini_cp,ini_rol) "
                . "VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)")
                )) {// Mandar a pagina de error "Fallo conexion"
            echo "Falló la preparación :(" . $link->errno . ")" . $link->error;
        }
        if (!($sentencia->bind_param('ssssssiissisisis', $u->getId(), $u->getApellido1(), $u->getApellido2(),
                        $u->getEmail(), $u->getTelefono1(), $u->getTelefono2(), $u->getTipoVia(), $u->getNombreVia(),
                        $u->getNumero(), $u->getEscalera(), $u->getPiso(), $u->getLetra(), $u->getCp(), $u->getRol()))) {
            echo "Falló la vinculación de parametros :(" . $sentencia->errno . ")" . $sentencia->error;
        }
        if (!$sentencia->execute()) {// Mandar a pagina de error "Fallo conexion"
            echo "Fallo la ejecución:(" . $sentencia->errno . ")" . $sentencia->errno;
        }
        $resultado = $sentencia->get_result();
        $resultado->close();
        $link->close();
    }

    // Administrador del sistema validación.
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
            $link->close();
            return false;
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
            $link->close();
            return $user;
        }
    }

    public function eliminarUsuarioFranquicia() {
        
    }

    public function actualizarUsuarioFranquicia() {
        
    }
}
