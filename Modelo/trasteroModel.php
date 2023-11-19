<?php

class trastero {
    protected $tipo;
    protected $fechaAlquiler;
    protected $duracionAlquiler;
    protected $password;
    protected $card;
    protected $cliente;
    
    public function __construct() {
        $this->tipo = $tipo;
        $this->fechaAlquiler = $fechaAlquiler;
        $this->duracionAlquiler = $duracionAlquiler;
        $this->password = $password;
        $this->card = $card;
        $this->cliente = $cliente;
    }
    
    public function getTipo() {
        return $this->tipo;
    }

    public function getFechaAlquiler() {
        return $this->fechaAlquiler;
    }

    public function getDuracionAlquiler() {
        return $this->duracionAlquiler;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getCard() {
        return $this->card;
    }

    public function getCliente() {
        return $this->cliente;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setFechaAlquiler($fechaAlquiler): void {
        $this->fechaAlquiler = $fechaAlquiler;
    }

    public function setDuracionAlquiler($duracionAlquiler): void {
        $this->duracionAlquiler = $duracionAlquiler;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }

    public function setCard($card): void {
        $this->card = $card;
    }

    public function setCliente($cliente): void {
        $this->cliente = $cliente;
    }
 
}

