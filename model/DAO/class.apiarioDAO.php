<?php

/**
 * conjunto de funciones para la tabla ces_usuario
 */
class apiarioDAO extends dataSource implements IApiario {

    /**
     * funcion para hacer borrado logico o permanente
     * @param type $id
     * @param type $logico
     * @return integer
     */
    public function delete($id, $logico = true) {

        if ($logico === true) {
            $sql = 'UPDATE FROM apiarios SET deleted_at = now() WHERE id_apiario = :id';
        } else {
            $sql = 'DELETE FROM apiarios WHERE id_apiario = :id';
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
    public function insert(\apiario $apiario) {
        $sql = 'INSERT INTO apiarios (cod_apiario,ubicacion,id_inventario,nombre,created_at) VALUES (codigo,ubicacion,id_inventario,nombre,now())';
        $params = array(
            ':codigo' => $apiario->getCod_apiario(),
            ':ubicacion' => $apiario->getUbicacion(),
            ':id_inventario' => $apiario->getId_inventario(),
            ':nombre' => $apiario->getNombre()
        );
        return $this->execute($sql, $params);
    }

    /**
     * funcion para seleccionar todos los usuarios
     * @return array of stdClass
     */
    public function select() {
        $sql = 'SELECT id_apiario,cod_apiario,ubicacion,nombre FROM apiarios';
        return $this->query($sql);
    }

    /**
     * funcion para seleccionar uduarios por id
     * @param type $id
     * @return array of stdClass
     */
    public function selectById($id) {
        $sql = 'SELECT cod_apiario,ubicacion,nombre FROM apiarios WHERE id_apiario = :id';
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
    public function update(\apiario $apiario) {
        $sql = 'UPDATE apiarios SET cod_apiario= :cod, ubicacion= :ubicacion, nombre= :nombre,updated_at= now() WHERE id_apiario = :id';
        $params = array(
            ':id' => $apiario->getId_apiario(),
            ':cod' => $apiario->getCod_apiario(),
            ':ubicacion' => $apiario->getUbicacion(),
            ':nombre' => $apiario->getNombre()
        );
        return $this->execute($sql, $params);
    }

}
