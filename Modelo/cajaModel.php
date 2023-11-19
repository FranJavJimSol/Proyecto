<?php

class caja {
    protected $tipoCaja;
    protected $precioCompra;
    protected $precioVenta;

    public function __construct($tipoCaja, $precioCompra, $precioVenta) {
        $this->tipoCaja = $tipoCaja;
        $this->precioCompra = $precioCompra;
        $this->precioVenta = $precioVenta;
    }

    public function getTipoCaja() {
        return $this->tipoCaja;
    }

    public function getPrecioCompra() {
        return $this->precioCompra;
    }

    public function getPrecioVenta() {
        return $this->precioVenta;
    }

    public function setTipoCaja($tipoCaja): void {
        $this->tipoCaja = $tipoCaja;
    }

    public function setPrecioCompra($precioCompra): void {
        $this->precioCompra = $precioCompra;
    }

    public function setPrecioVenta($precioVenta): void {
        $this->precioVenta = $precioVenta;
    }

}


