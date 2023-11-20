<?php

class mantaCubreMuebles extends consumibles {

    protected $tipo;

    public function __construct($tipo) {
        $this->tipo = $tipo;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo): void {
        $this->tipo = $tipo;
    }
}
