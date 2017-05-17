<?php

class colmena {

    private $id_colmena;
    private $cod_colmena;
    private $nom_colmena;
    private $id_apiario;
    private $estado;
    private $observaciones;
    private $id_reina;
    private $created_at;
    private $updated_at;
    private $deleted_at;
    
    function getId_colmena() {
        return $this->id_colmena;
    }

    function getCod_colmena() {
        return $this->cod_colmena;
    }

    function getNom_colmena() {
        return $this->nom_colmena;
    }

    function getId_apiario() {
        return $this->id_apiario;
    }

    function getEstado() {
        return $this->estado;
    }

    function getObservaciones() {
        return $this->observaciones;
    }

    function getId_reina() {
        return $this->id_reina;
    }

    function getCreatedAt() {
        return $this->created_at;
    }

    function getUpdatedAt() {
        return $this->updated_at;
    }

    function getDeletedAt() {
        return $this->deleted_at;
    }

    function setId_colmena($id_colmena) {
        $this->id_colmena = $id_colmena;
    }

    function setCod_colmena($cod_colmena) {
        $this->cod_colmena = $cod_colmena;
    }

    function setNom_colmena($nom_colmena) {
        $this->nom_colmena = $nom_colmena;
    }

    function setId_apiario($id_apiario) {
        $this->id_apiario = $id_apiario;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setObservaciones($observaciones) {
        $this->observaciones = $observaciones;
    }

    function setId_reina($id_reina) {
        $this->id_reina = $id_reina;
    }

    function setCreatedAt($created_at) {
        $this->created_at = $created_at;
    }

    function setUpdatedAt($updated_at) {
        $this->updated_at = $updated_at;
    }

    function setDeletedAt($deleted_at) {
        $this->deleted_at = $deleted_at;
    }
}