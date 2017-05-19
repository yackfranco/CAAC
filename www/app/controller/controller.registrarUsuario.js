angular.module('CAAC').
        controller('registrarUsuarioController', ['$scope', 'crudUsuarioService', function ($scope, crudUsuarioService) {
                $scope.datos = {};

                $scope.guardar = function () {
//                    console.log($scope.datos);
                    crudUsuarioService.guardarUsuario($scope.datos).then(function successCallback(answer) {
                        
                    }, function errorCallback(answer) {
                        console.log(answer);
                    });
                };




                $scope.editar = function () {
                };
                $scope.eliminar = function () {
                };
            }]);