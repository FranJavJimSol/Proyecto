<?php

class trastero {

    protected $numeroFranquiciado;
    protected $tipo;
    protected $fechaAlquiler;
    protected $duracionAlquiler;
    protected $password;
    protected $card;
    protected $cliente;

    public function __construct($numeroFranquiciado, $tipo) {

        $this->numeroFranquiciado = $numeroFranquiciado;
        $this->tipo = $tipo;
        $this->fechaAlquiler = $fechaAlquiler;
        $this->duracionAlquiler = $duracionAlquiler;
        $this->password = $password;
        $this->card = $card;
        $this->cliente = $cliente;
    }

    public function getNumeroFranquiciado() {
        return $this->numeroFranquiciado;
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

    public function setNumeroFranquiciado($numeroFranquiciado) {
        $this->numeroFranquiciado = $numeroFranquiciado;
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

    public function insertarElementosAlquiler($id, $tipo) {

        $link = $this->conectarInicio();
        if (!($sentencia = $link->prepare("INSERT INTO trastero (tra_num_franquiciado,tra_tipo) VALUES (?,?)")
                )) {// Mandar a pagina de error "Fallo conexion"
            echo "Falló la preparación :(" . $link->errno . ")" . $link->error;
        }
        if (!($sentencia->bind_param('ss', $id, $tipo))) {// Mandar a pagina de error "Fallo conexion"
            echo "Falló la vinculación de parametros :(" . $sentencia->errno . ")" . $sentencia->error;
        }
        if (!$sentencia->execute()) {// Mandar a pagina de error "Fallo conexion"
            echo "Fallo la ejecución:(" . $sentencia->errno . ")" . $sentencia->errno;
        }
        $resultado = $sentencia->get_result();
        $resultado->close();
    }
}
