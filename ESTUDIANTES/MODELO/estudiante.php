<?php

class Estudiante {

	private $est_id;
	private $est_nombre;
	private $est_apellido;
	private $est_fecha_ingreso;
	private $est_telefono;
    private $est_email;
    


	function __construct($est_id,$est_nombre,$est_apellido,$est_fecha_ingreso,$est_telefono,$est_email) {
        $this->est_id = $est_id;
        $this->est_nombre = $est_nombre;
        $this->est_apellido = $est_apellido;
        $this->est_fecha_ingreso = $est_fecha_ingreso;
        $this->est_telefono = $est_telefono;
        $this->est_email = $est_email;
    }

    function setEstId($est_id) {
        $this->est_id = $est_id;
    }

    function setEstNombre($est_nombre) {
        $this->est_nombre = $est_nombre;
    }

    function setEstApellido($est_apellido) {
        $this->est_apellido = $est_apellido;
    }

    function setEstFechaIngreso($est_fecha_ingreso) {
        $this->est_fecha_ingreso = $est_fecha_ingreso;
    }

    function setEstTelefono($est_telefono) {
        $this->est_telefono = $est_telefono;
    }
    function setEstEmail($est_email) {
        $this->est_email = $est_email;
    }


    function getEstId() {
        return $this->est_id;
    }

    function getEstNombre() {
        return $this->est_nombre;
    }

    function getEstApellido() {
        return $this->est_apellido;
    }

    function getEstFechaIngreso() {
        return $this->est_fecha_ingreso;
    }

    function getEstTelefono() {
        return $this->est_telefono;
    }

    function getEstEmail() {
        return $this->est_email;
    }

    
}