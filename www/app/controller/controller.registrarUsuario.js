angular.module('CAAC').
        controller('registrarUsuarioController', ['$scope', 'crudUsuarioService', function ($scope, crudUsuarioService) {
                $scope.datos = {};
                $scope.usuarioGuardado = false;
                $scope.datos.accion = "";
                $scope.modal = {};
                $scope.guardar = function () {
//                    console.log($scope.datos);
                    $scope.datos.accion = "guardar";
                    crudUsuarioService.crud($scope.datos).then(function successCallback(answer) {
                        $scope.datos.accion = "";
                        console.log(answer);
                        if (answer.data.codigo == 200) {
                            $scope.datos = {};
                            $scope.usuarioGuardado = true;
                        }
                    }, function errorCallback(answer) {
                        console.log(answer);
                    });
                };

                function cargarTabla() {
                    $scope.datos.accion = "cargarTabla";
                    crudUsuarioService.crud($scope.datos).then(function successCallback(answer) {
                        $scope.datos.accion = "";
                        $scope.tabla = answer.data.tabla;
                        console.log(answer);
                    }, function errorCallback(answer) {
                        console.log(answer);
                    });
                }

                cargarTabla();
                $scope.editar = function () {
                };

                $scope.eliminar = function (x, $des = true) {
                    if ($des) {
                        $id = x.id;
                        $scope.modal.usuario = x.usuario;
                    } else {
                        crudUsuarioService.crud({'id':$id,'accion':'eliminar'}).then(function successCallback(answer) {
                            $scope.datos.accion = "";
                            cargarTabla();
                            $('#modalEliminar').modal('hide');
                            console.log(answer);
                        }, function errorCallback(answer) {
                            console.log(answer);
                        });
                }

                };
            }]);