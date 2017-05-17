<?php

/**
 * conjunto de funciones para la tabla ces_usuario
 */
class inventarioDAO extends dataSource implements IInventario {

    /**
     * funcion para hacer borrado logico o permanente
     * @param type $id
     * @param type $logico
     * @return integer
     */
    public function delete($id, $logico = true) {

        if ($logico === true) {
            $sql = 'UPDATE FROM inventario SET deleted_at = now() WHERE id_inventario = :id';
        } else {
            $sql = 'DELETE FROM inventario WHERE id_inventario = :id';
        }

        $params = array(
            ':id' => $id
        );
        return $this->execute($sql, $params);
    }

    /**
     * funcion para insertar nuevo usuario
     * @param \usuario $inventario
     * @return integer
     */
    public function insert(\inventario $inventario) {
        $sql = 'INSERT INTO inventario (pasilla,veneno,created_at) VALUES (:pasilla,:veneno,now())';
        $params = array(
            ':pasilla' => $inventario->getPasilla(),
            ':veneno' => $inventario->getVeneno()
        );
        return $this->execute($sql, $params);
    }

    /**
     * funcion para seleccionar todos los usuarios
     * @return array of stdClass
     */
    public function select() {
        $sql = 'SELECT id_inventario,pasilla,veneno FROM inventario';
        return $this->query($sql);
    }

    /**
     * funcion para seleccionar uduarios por id
     * @param type $id
     * @return array of stdClass
     */
    public function selectById($id) {
        $sql = 'SELECT pasilla,veneno FROM inventario WHERE id_inventario = :id';
        $params = array(
            ':id' => $id
        );
        return $this->query($sql, $params);
    }

    /**
     * funcion para actulizar usuarios
     * @param \usuario $inventario
     * @return integer
     */
    public function update(\inventario $inventario) {
        $sql = 'UPDATE inventario SET pasilla= :pasilla, veneno= :veneno,updated_at= now() WHERE id_inventario = :id';
        $params = array(
            ':veneno' => $inventario->getVeneno(),
            ':pasilla' => $inventario->getPasilla()
        );
        return $this->execute($sql, $params);
    }

}
