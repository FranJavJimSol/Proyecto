<?php

class Email {

    protected $from;
    protected $to;
    protected $subject;
    protected $message;

    public function __construct($from, $to, $subject, $message) {
        $this->from = $from;
        $this->to = $to;
        $this->subject = $subject;
        $this->message = $message;
    }

    public function send() {
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        $from = $this->from; //Remitente
        $to = $this->to; //Destinatario
        $subject = $this->subject; //Asunto del mensaje
        $message = $this->message; //Redactar mensaje
        $headers = "From:" . $from; //Detalla la información vital, como la dirección del remitente, la ubicación de respuesta, etc.
        mail($to, $subject, $message, $headers); //Ejecución de la funcion
        echo "The email message was sent.";
    }
}
