<?php

class plasticoProtector {

    protected $tipo;
    protected $precioCompra;
    protected $precioVenta;
    
    public function getTipo() {
        return $this->tipo;
    }

    public function getPrecioCompra() {
        return $this->precioCompra;
    }

    public function getPrecioVenta() {
        return $this->precioVenta;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }

    public function setPrecioCompra($precioCompra): void {
        $this->precioCompra = $precioCompra;
    }

    public function setPrecioVenta($precioVenta): void {
        $this->precioVenta = $precioVenta;
    }


}
