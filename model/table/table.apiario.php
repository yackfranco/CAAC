<?php

class apiario {

    private $id_apiario;
    private $cod_apiario;
    private $ubicacion;
    private $id_inventario;
    private $nombre;
    private $created_at;
    private $updated_at;
    private $deleted_at;

    function getId_apiario() {
        return $this->id_apiario;
    }

    function getCod_apiario() {
        return $this->cod_apiario;
    }

    function getUbicacion() {
        return $this->ubicacion;
    }

    function getId_inventario() {
        return $this->id_inventario;
    }

    function getNombre() {
        return $this->nombre;
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

    function setId_apiario($id_apiario) {
        $this->id_apiario = $id_apiario;
    }

    function setCod_apiario($cod_apiario) {
        $this->cod_apiario = $cod_apiario;
    }

    function setUbicacion($ubicacion) {
        $this->ubicacion = $ubicacion;
    }

    function setId_inventario($id_inventario) {
        $this->id_inventario = $id_inventario;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setCreatedat($created_at) {
        $this->created_at = $created_at;
    }

    function setUpdatedat($updated_at) {
        $this->updated_at = $updated_at;
    }

    function setDeletedat($deleted_at) {
        $this->deleted_at = $deleted_at;
    }

}
