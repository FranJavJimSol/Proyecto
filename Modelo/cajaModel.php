<?php

class caja extends consumibles {

    protected $tipoCaja;

    public function __construct($tipoCaja) {
        $this->tipoCaja = $tipoCaja;
    }

    public function getTipoCaja() {
        return $this->tipoCaja;
    }

    public function setTipoCaja($tipoCaja): void {
        $this->tipoCaja = $tipoCaja;
    }
}
