<?php
require './usuarioModel.php';

      

class administradorModel extends usuarioModel {

    protected $trasteros; 
    protected $cajas;
    protected $cintas;
    protected $estantes;
    protected $mantasCubreMuebles;
    protected $plasticosProtectores;
    
    public function __construct($trasteros,$cajas,$cintas,$estantes,$mantasCubreMuebles) {
        $this->trasteros = Array();
        $this->cajas = Array();
        $this->cintas = Array();
        $this->estantes = Array();
        $this->mantasCubreMuebles = Array();
        $this->plasticosProtectores = Array();
    }

    public function getTrasteros() {
        return $this->trasteros;
    }

    public function getCajas() {
        return $this->cajas;
    }

    public function getCintas() {
        return $this->cintas;
    }

    public function getEstantes() {
        return $this->estantes;
    }

    public function getMantasCubreMuebles() {
        return $this->mantasCubreMuebles;
    }

    public function getPlasticosProtectores() {
        return $this->plasticosProtectores;
    }

    public function setTrasteros($trasteros): void {
        $this->trasteros = $trasteros;
    }

    public function setCajas($cajas): void {
        $this->cajas = $cajas;
    }

    public function setCintas($cintas): void {
        $this->cintas = $cintas;
    }

    public function setEstantes($estantes): void {
        $this->estantes = $estantes;
    }

    public function setMantasCubreMuebles($mantasCubreMuebles): void {
        $this->mantasCubreMuebles = $mantasCubreMuebles;
    }

    public function setPlasticosProtectores($plasticosProtectores): void {
        $this->plasticosProtectores = $plasticosProtectores;
    }

    //Metodos 
    public function crearUsuarioNuevo() {
        $link = parent::conectarInicio();
    }
    
    public function modificarUsuarioNuevo() {
        $link = parent::conectarInicio();
    }
    
    public function eliminarUsuarioNuevo() {
        $link = parent::conectarInicio();
    }
    
    public function agregaTrastero($a) {
        
    }
    
    public function agregaCaja($a) {
        
    }
    
    public function agregaCinta($ca) {
        
    }
    
    public function agregaEstante($a) {
        
    }
    
    public function agregaMantaCubreMuebles($a) {
        
    }
    
    public function agregaPlasticoProtector($a) {
        
    }
    
}
