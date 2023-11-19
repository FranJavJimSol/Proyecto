<?php

class usuarioModel {

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

    public function conectarInicio() {
        return mysqli_connect(
                $this->server = 'localhost',
                $this->user = 'super',
                $this->password = '123456',
                $this->database = 'Inicio'
        );
    }
}
