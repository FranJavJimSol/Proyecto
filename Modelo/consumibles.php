<?php

class consumibles extends conexion {

    protected $numeroFranquiciado;
    protected $precioCompra;
    protected $precioVenta;

    public function __construct($numeroFranquiciado, $precioCompra, $precioVenta) {
        $this->numeroFranquiciado = $numeroFranquiciado;
        $this->precioCompra = $precioCompra;
        $this->precioVenta = $precioVenta;
    }

    public function getNumeroFranquiciado() {
        return $this->numeroFranquiciado;
    }

    public function getPrecioCompra() {
        return $this->precioCompra;
    }

    public function getPrecioVenta() {
        return $this->precioVenta;
    }

    public function setNumeroFranquiciado($numeroFranquiciado): void {
        $this->numeroFranquiciado = $numeroFranquiciado;
    }

    public function setPrecioCompra($precioCompra): void {
        $this->precioCompra = $precioCompra;
    }

    public function setPrecioVenta($precioVenta): void {
        $this->precioVenta = $precioVenta;
    }
}
