<?php

class inventario {

    private $id_inventario;
    private $pasilla;
    private $veneno;
    private $created_at;
    private $updated_at;
    private $deleted_at;
    
    function getId_inventario() {
        return $this->id_inventario;
    }

    function getPasilla() {
        return $this->pasilla;
    }

    function getVeneno() {
        return $this->veneno;
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

    function setId_inventario($id_inventario) {
        $this->id_inventario = $id_inventario;
    }

    function setPasilla($pasilla) {
        $this->pasilla = $pasilla;
    }

    function setVeneno($veneno) {
        $this->veneno = $veneno;
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