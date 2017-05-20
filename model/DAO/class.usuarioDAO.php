<?php

/**
 * conjunto de funciones para la tabla ces_usuario
 */
class usuarioDAO extends dataSource implements IUsuario {

    /**
     * funcion para hacer borrado logico o permanente
     * @param type $id
     * @param type $logico
     * @return integer
     */
    public function delete($id, $logico = true) {

        if ($logico === true) {
            $sql = 'UPDATE FROM usuario SET deleted_at = now() WHERE id = :id';
        } else {
            $sql = 'DELETE FROM usuario WHERE id = :id';
        }

        $params = array(
            ':id' => $id
        );
        return $this->execute($sql, $params);
    }

    /**
     * funcion para insertar nuevo usuario
     * @param \usuario $usuario
     * @return integer
     */
    public function insert(\usuario $usuario) {
        $sql = 'INSERT INTO usuario (usuario,contrasena,email,celular,rol,created_at) VALUES (:user,:contra,:email,:celular,:rol,now())';
        $params = array(
            ':user' => $usuario->getUsuario(),
            ':contra' => $usuario->getContraseña(),
            ':email' => $usuario->getEmail(),
            ':celular' => $usuario->getCelular(),
            ':rol' => $usuario->getRol()
        );
        return $this->execute($sql, $params);
    }

    /**
     * funcion para seleccionar todos los usuarios
     * @return array of stdClass
     */
    public function select() {
        $sql = 'SELECT usuario,contrasena,email,celular,rol FROM usuario';
        return $this->query($sql);
    }

    /**
     * funcion para seleccionar uduarios por id
     * @param type $id
     * @return array of stdClass
     */
    public function selectById($id) {
        $sql = 'SELECT usuario,contrasena,email,celular,rol FROM usuario WHERE id = :id';
        $params = array(
            ':id' => $id
        );
        return $this->query($sql, $params);
    }

    /**
     * funcion para actulizar usuarios
     * @param \usuario $usuario
     * @return integer
     */
    public function update(\usuario $usuario) {
        $sql = 'UPDATE usuario SET usuerio= :user, contrasena = :contra, email= :email, celular= :celular, rol= :rol  WHERE id = :id';
        $params = array(
            ':id' => $usuario->getId(),
            ':user' => $usuario->getUsuario(),
            ':contra' => $usuario->getContraseña(),
            ':email' => $usuario->getEmail(),
            ':celular' => $usuario->getCelular(),
            ':rol' => $usuario->getRol()
        );
        return $this->execute($sql, $params);
    }

}
