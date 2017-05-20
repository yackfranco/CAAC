angular.module('CAAC').
        controller('registrarUsuarioController', ['$scope', 'crudUsuarioService', function ($scope, crudUsuarioService) {
                $scope.datos = {};
                $scope.usuarioGuardado=false;
                $scope.guardar = function () {
//                    console.log($scope.datos);
                    crudUsuarioService.guardarUsuario($scope.datos).then(function successCallback(answer) {
                        console.log(answer);
                        if(answer.data.codigo == 200){
                            $scope.datos={};
                            $scope.usuarioGuardado=true;
                        }
                    }, function errorCallback(answer) {
                        console.log(answer);
                    });
                };




                $scope.editar = function () {
                };
                $scope.eliminar = function () {
                };
            }]);