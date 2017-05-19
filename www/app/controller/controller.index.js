angular.module('CAAC').controller('indexController', ['$scope', 'securityService', '$sessionStorage', '$location', 'rolAdmin', function ($scope, security, $sessionStorage, $location, admin) {
        $scope.datos = {};
        $scope.usuarioErroneo = false;

        console.log($scope.datos.rol);
        $scope.entrar = function () {
            security.validateUserAndPassword($scope.datos).then(function successCallback(answer) {
                console.log(answer);
                if (answer.data.codigo === 200)
                {
                    $scope.usuarioErroneo = false;
//                    console.log("todo bien");
                    $sessionStorage.usuario = answer.data.usuario[0];
                    if ($sessionStorage.usuario.rol == admin) {
                        $location.path('/MenuRegistrar');
                    }
                } else
                {
                    $scope.datos = {};
                    $scope.usuarioErroneo = true;
                }
            }, function errorCallback(answer) {
                console.log(answer);
            });
        };
    }]);