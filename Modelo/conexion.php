<?php
class conexion {

    protected $server = 'localhost';
    protected $user = 'super';
    protected $password = '123456';
    protected $database = 'Inicio';

    public function conectarInicio() {
        return mysqli_connect(
                $this->server,
                $this->user,
                $this->password,
                $this->database
        );
    }
}
