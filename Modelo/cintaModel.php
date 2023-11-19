<?php

class cinta {
    protected $tamano;
    protected $precioCompra;
    protected $precioVenta;

    public function __construct($tamano, $precioCompra, $precioVenta) {
        $this->tamano = $tamano;
        $this->precioCompra = $precioCompra;
        $this->precioVenta = $precioVenta;
    }

    public function getTamano() {
        return $this->tamano;
    }

    public function getPrecioCompra() {
        return $this->precioCompra;
    }

    public function getPrecioVenta() {
        return $this->precioVenta;
    }

    public function setTamano($tamano): void {
        $this->tamano = $tamano;
    }

    public function setPrecioCompra($precioCompra): void {
        $this->precioCompra = $precioCompra;
    }

    public function setPrecioVenta($precioVenta): void {
        $this->precioVenta = $precioVenta;
    }

}

