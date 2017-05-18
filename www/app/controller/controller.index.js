angular.module('CAAC').controller('indexController', ['$scope', 'securityService','$sessionStorage', function ($scope, security,$sessionStorage) {
        $scope.datos = {};
        $scope.usuarioErroneo = false;
        $scope.entrar = function () {
            security.validateUserAndPassword($scope.datos).then(function successCallback(answer) {
                console.log(answer);
                if (answer.data.codigo === 200)
                {
                    $scope.usuarioErroneo = false;
                    console.log("todo bien");
                    $sessionStorage.usuario = answer.data.usuario[0];
                } else
                {
                    $scope.datos = {};
                    $scope.usuarioErroneo = true;
                }
            }, function errorCallback(answer) {
                console.log(answer);
            });


//            $scope.usuarioErroneo = false;
//            console.log($scope.datos);

        };

//                
    }]);