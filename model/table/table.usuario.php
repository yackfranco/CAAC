<?php

class usuario {

    /**
     * Llave Principal y campo autoincrementable de la tabla Usuario	
     * @var integer 
     */
    private $id;

    /**
     * Nombre del usuario con el cual se hara el ingreso al aplicativo
     * @var string 
     */
    private $usuario;

    /**
     * Contraseña para ingresar al sistema
     * @var string 
     */
    private $contraseña;

    /**
     * Correo electronico del Usuario
     * @var string 
     */
    private $email;

    /**
     * Numero de celular para el contacto del usuario	
     * @var string 
     */
    private $celular;

    /**
     * se divide en 2 (admin-Invitado) el admin puede agregar los invitados y controlar la base de datos, el invitado solo puede controlar la aplicación	
     * @var integer
     */
    private $rol;

    /**
     * se utiliza para saber cuando se creo el usuario	
     * @var string 
     */
    private $create_at;

    /**
     * se utiliza para saber cuando se hace un update en el usuario	
     * @var string 
     */
    private $update_at;

    /**
     * se utiliza para saber cuando se elimina el usuario	
     * @var string
     */
    private $delete_at;
    function getId() {
        return $this->id;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getContraseña() {
        return $this->contraseña;
    }

    function getEmail() {
        return $this->email;
    }

    function getCelular() {
        return $this->celular;
    }

    function getRol() {
        return $this->rol;
    }

    function getCreateAt() {
        return $this->create_at;
    }

    function getUpdateAt() {
        return $this->update_at;
    }

    function getDeleteAt() {
        return $this->delete_at;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setContraseña($contraseña) {
        $this->contraseña = $contraseña;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setCelular($celular) {
        $this->celular = $celular;
    }

    function setRol($rol) {
        $this->rol = $rol;
    }

    function setCreateAt($create_at) {
        $this->create_at = $create_at;
    }

    function setUpdateAt($update_at) {
        $this->update_at = $update_at;
    }

    function setDeleteAt($delete_at) {
        $this->delete_at = $delete_at;
    }
    
}