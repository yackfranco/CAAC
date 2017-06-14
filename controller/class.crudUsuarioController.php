<?php

class CRUDUsuario extends controllerExtended {

    public function main(\request $request) {
        try {
            $this->loadTableUsuario();
//            print_r($request);
//            exit();
            $usuarioDAO = new usuarioDAOExt($this->getConfig());

            if ($request->getParam('accion') == "cargarTabla") {
                $respuesta1 = $usuarioDAO->select();
                $respuesta2 = array(
                    'codigo' => 200,
                    'tabla' => $respuesta1
                );
            }


            if ($request->getParam('accion') == "guardar") {
                $user = $request->getParam('usuario');
                $password = hash($this->getConfig()->getHash(), $request->getParam('contrasena'), false);
                $correo = $request->getParam('correo');
                $celular = $request->getParam('celular');
                $rol = $request->getParam('rol');

                $usuario = new usuario();
                $usuario->setUsuario($user);
                $usuario->setEmail($correo);
                $usuario->setCelular($celular);
                $usuario->setContraseña($password);
                $usuario->setRol($rol);

                $id = $request->getParam('id');
                $respuesta1 = $usuarioDAO->insert($usuario);
                $respuesta2 = array(
                    'codigo' => (count($respuesta1) > 0) ? 200 : 500,
                    'usuario' => $respuesta1
                );
            }


            if ($request->getParam('accion') == "eliminar") {
//            print_r($request);
//            exit();

                $respuesta1 = $usuarioDAO->delete($request->getParam('id'));
                $respuesta2 = array(
                    'codigo' => (count($respuesta1) > 0) ? 200 : 500,
                    'usuario' => $respuesta1
                );
            }






            $this->setParam('rsp', $respuesta2);
            $this->setView('imprimirJson');
        } catch (Exception $exc) {
            echo $exc->getMessage();
        }
    }

    private function loadTableUsuario() {
        require $this->getConfig()->getPath() . 'model/table/table.usuario.php';
        require $this->getConfig()->getPath() . 'model/interface/interface.usuario.php';
        require $this->getConfig()->getPath() . 'model/DAO/class.usuarioDAO.php';
        require $this->getConfig()->getPath() . 'model/extended/class.usuarioDAOExt.php';
    }

}
