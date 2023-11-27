<?php

class conexion {

    protected $server = 'localhost';
    protected $user = 'super';
    protected $pass = '123456';
    protected $database = 'Inicio';

    public function conectarInicio() {
        return mysqli_connect(
                $this->server,
                $this->user,
                $this->pass,
                $this->database
        );
    }
}
