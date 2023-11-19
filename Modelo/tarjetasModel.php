<?php

class tarjeta {

    protected $idUsuario;
    protected $idCliente;
    protected $trastero;

    public function __construct($idUsuario) {

        $this->idUsuario = $idUsuario;
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

    public function setIdUsuario($idUsuario): void {
        $this->idUsuario = $idUsuario;
    }

    public function setIdCliente($idCliente): void {
        $this->idCliente = $idCliente;
    }

    public function setTrastero($trastero): void {
        $this->trastero = $trastero;
    }
}
