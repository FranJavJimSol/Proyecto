<?php

//require 'conexion.php';

class estanteModel extends conexion {

    protected $id;
    protected $numeroFranquiciado;
    protected $tipo;
    protected $fechaAlquiler;
    protected $duracionAlquiler;
    protected $cliente;

    public function __construct() {

        $this->id;
        $this->numeroFranquiciado;
        $this->tipo;
        $this->fechaAlquiler;
        $this->duracionAlquiler;
        $this->cliente;
    }

    public function getId() {
        return $this->id;
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

    public function getCliente() {
        return $this->cliente;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNumeroFranquiciado($numeroFranquiciado): void {
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

    public function setCliente($cliente): void {
        $this->cliente = $cliente;
    }

    public function ultimaId() {
        $link = parent::conectarInicio();
        $consulta = "SELECT MAX(es_id) AS id FROM estante";
        if ($resultado = $link->query($consulta)) {
            /* obtener el array de objetos */
            while ($fila = $resultado->fetch_row()) {
                $id = $fila[0];
            }
            /* liberar el conjunto de resultados */
            $resultado->close();
            $mysqli->close();
            return $id;
        }
    }
}
