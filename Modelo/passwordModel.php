<?php
class password {
    
    protected $numero;
    protected $idUsuario;
    protected $idCliente;
    protected $trastero;
    protected $tarjeta;
    
    public function __construct($numero, $idUsuario) {
        $this->numero = $numero;
        $this->idUsuario = $idUsuario;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function getIdCliente() {
        return $this->idCliente;
    }

    public function getTrastero() {
        return $this->trastero;
    }

    public function getTarjeta() {
        return $this->tarjeta;
    }

    public function setNumero($numero): void {
        $this->numero = $numero;
    }

    public function setIdUsuario($idUsuario): void {
        $this->idUsuario = $idUsuario;
    }

    public function setIdCliente($idCliente): void {
        $this->idCliente = $idCliente;
    }

    public function setTrastero($trastero): void {
        $this->trastero = $trastero;
    }

    public function setTarjeta($tarjeta): void {
        $this->tarjeta = $tarjeta;
    }
    
    public function cambioPassword($nuevoPassword) {
        $this->setNumero($nuevoPassword);
    }
      
}

