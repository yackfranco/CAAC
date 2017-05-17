<?php

/**
 * conjunto de funciones para la tabla ces_usuario
 */
class colmenaDAO extends dataSource implements IColmena {

    /**
     * funcion para hacer borrado logico o permanente
     * @param type $id
     * @param type $logico
     * @return integer
     */
    public function delete($id, $logico = true) {

        if ($logico === true) {
            $sql = 'UPDATE FROM colmenas SET deleted_at = now() WHERE id_colmena = :id';
        } else {
            $sql = 'DELETE FROM colmenas WHERE id_colmena = :id';
        }

        $params = array(
            ':id' => $id
        );
        return $this->execute($sql, $params);
    }

    /**
     * funcion para insertar nuevo usuario
     * @param \usuario $colmena
     * @return integer
     */
    public function insert(\colmena $colmena) {
        $sql = 'INSERT INTO colmenas (cod_colmena,nom_colmena,id_apiario,estado,observaciones,id_reina,created_at) VALUES (:codigo,:nombre,:idApiario,:estado,observaciones,idReina,now())';
        $params = array(
            ':codigo' => $colmena->getCod_colmena(),
            ':nombre' => $colmena->getNom_colmena(),
            ':idApiario' => $colmena->getId_apiario(),
            ':estado' => $colmena->getEstado(),
            ':observacion' => $colmena->getObservaciones(),
            ':idReina' => $colmena->getId_reina()
        );
        return $this->execute($sql, $params);
    }

    /**
     * funcion para seleccionar todos los usuarios
     * @return array of stdClass
     */
    public function select() {
        $sql = 'SELECT id_colmena,cod_colmena,nom_colmena,id_apiario,estado,observaciones,id_reina FROM colmenas';
        return $this->query($sql);
    }

    /**
     * funcion para seleccionar uduarios por id
     * @param type $id
     * @return array of stdClass
     */
    public function selectById($id) {
        $sql = 'SELECT cod_colmena,nom_colmena,id_apiario,estado,observaciones,id_reina WHERE id_colmena = :id';
        $params = array(
            ':id' => $id
        );
        return $this->query($sql, $params);
    }

    /**
     * funcion para actulizar usuarios
     * @param \usuario $colmena
     * @return integer
     */
    public function update(\colmena $colmena) {
        $sql = 'UPDATE colmenas SET cod_colmena= :codigo, nom_colmena= :nombre,id_apiario= :idApiario,estado= :estado,observaciones= :observaciones,id_reina= :idReina, updated_at= now() WHERE id_colmena = :id';
        $params = array(
            ':id' => $colmena->getId_colmena(),
            ':codigo' => $colmena->getCod_colmena(),
            ':nombre' => $colmena->getNom_colmena(),
            ':idApiario' => $colmena->getId_apiario(),
            ':estado' => $colmena->getEstado(),
            ':observacion' => $colmena->getObservaciones(),
            ':idReina' => $colmena->getId_reina()
        );
        return $this->execute($sql, $params);
    }

}
