<?php

class conexion {

    protected $server = 'localhost';
    protected $user = 'super';
    protected $pass = '123456';
    protected $database = 'Inicio';
    
  /*  protected $server = 'trashtero.es';
    protected $user = 'u846021189_vi';
    protected $pass = 'Piripipao2000?';
    protected $database = 'u846021189_storageRooms';*/

    public function conectarInicio() {
        return mysqli_connect(
                $this->server,
                $this->user,
                $this->pass,
                $this->database
        );
    }
}
