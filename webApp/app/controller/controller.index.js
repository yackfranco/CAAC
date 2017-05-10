angular.module('CAAC').
        controller('indexController', ['$scope', function ($scope) {

                $scope.entrar = function () {
                    var usuario = $scope.usu;
                    var contra = $scope.contra;
                    console.log("usuario: "+usuario);
                    console.log("Contraseña: "+contra);
                    if( usuario=="a" && contra=="1")
                    {
                        $scope.link="#!/MenuRegistrar";
                    }
                    else
                    {
//                        $scope.link="#!/";
                          alert("Usuario o Contraseña incorrecto");
                    }
                }

//                
            }]);