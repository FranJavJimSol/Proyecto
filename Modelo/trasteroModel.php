<?php

class trasteroModel extends estante {

    protected $password;
    protected $card;

    public function __construct() {
        parent::__construct();
        $this->password;
        $this->card;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getCard() {
        return $this->card;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }

    public function setCard($card): void {
        $this->card = $card;
    }

    public function ultimaId() {
        $link = parent::conectarInicio();
        $sentencia = "SELECT COUNT(*) FROM trastero";
        $result = $pdo->query($sentencia); //$pdo sería el objeto conexión
        $resultado = $result->fetchColumn();
        return $resultado;

        /* if (!($sentencia = $link->prepare("")
          )) {// Mandar a pagina de error "Fallo conexion"
          echo "Falló la preparación :(" . $link->errno . ")" . $link->error;
          }
          if (!($sentencia->bind_param('ss', $id, $tipo))) {// Mandar a pagina de error "Fallo conexion"
          echo "Falló la vinculación de parametros :(" . $sentencia->errno . ")" . $sentencia->error;
          }
          if (!$sentencia->execute()) {// Mandar a pagina de error "Fallo conexion"
          echo "Fallo la ejecución:(" . $sentencia->errno . ")" . $sentencia->errno;
          }
          $resultado = $sentencia->get_result();
          $resultado->close();
          return $n; */
    }

    public function insertarElementosAlquiler($id, $tipo) {

        $link = $this->conectarInicio();
        if (!($sentencia = $link->prepare("INSERT INTO trastero (tra_num_franquiciado,tra_tipo) VALUES (?,?)")
                )) {// Mandar a pagina de error "Fallo conexion"
            echo "Falló la preparación :(" . $link->errno . ")" . $link->error;
        }
        if (!($sentencia->bind_param('ss', $id, $tipo))) {// Mandar a pagina de error "Fallo conexion"
            echo "Falló la vinculación de parametros :(" . $sentencia->errno . ")" . $sentencia->error;
        }
        if (!$sentencia->execute()) {// Mandar a pagina de error "Fallo conexion"
            echo "Fallo la ejecución:(" . $sentencia->errno . ")" . $sentencia->errno;
        }
        $resultado = $sentencia->get_result();
        $resultado->close();
    }
}
