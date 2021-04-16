<?php

class Docente {
    private $doc_id;
    private $doc_nombre;
    private $doc_apellido;
    private $doc_materia;
    private $doc_telefono;
    private $doc_email;
    
    function __construct($doc_id,$doc_nombre,$doc_apellido,$doc_materia,$doc_telefono,$doc_email) {
        $this->doc_id = $doc_id;
        $this->doc_nombre = $doc_nombre;
        $this->doc_apellido = $doc_apellido;
        $this->doc_materia = $doc_materia;
        $this->doc_telefono = $doc_telefono;
        $this->doc_email = $doc_email;
    }

    function setDocId($doc_id) {
        $this->doc_id = $doc_id;
    }

    function setDocNombre($doc_nombre) {
        $this->doc_nombre = $doc_nombre;
    }

    function setDocApellido($doc_apellido) {
        $this->doc_apellido = $doc_apellido;
    }

    function setDocMateria($doc_materia) {
        $this->doc_materia = $doc_materia;
    }

    function setDocTelefono($doc_telefono) {
        $this->doc_telefono = $doc_telefono;
    }
    function setDocEmail($doc_email) {
        $this->doc_email = $doc_email;
    }

    function getDocId() {
        return $this->doc_id;
    }

    function getDocNombre() {
        return $this->doc_nombre;
    }

    function getDocApellido() {
        return $this->doc_apellido;
    }

    function getDocMateria() {
        return $this->doc_materia;
    }

    function getDocTelefono() {
        return $this->doc_telefono;
    }

    function getDocEmail() {
        return $this->doc_email;
    }
}