<?php

class guardarUsuario extends controllerExtended {

    public function main(\request $request) {
        try {
            $this->loadTableUsuario();
            
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
            
            $usuarioDAO = new usuarioDAOExt($this->getConfig());
            $respuesta1 = $usuarioDAO->insert($usuario);
            $respuesta2 = array(
                'codigo' => (count($respuesta1) > 0) ? 200 : 500,
                'usuario' => $respuesta1
            );

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
