angular.module('CAAC').
        config(['$routeProvider',
            function config($routeProvider) {
                $routeProvider.
                        when('/', {
                            controller: 'indexController',
                            templateUrl: 'app/template/index.html'
                        }).
                        when('/ControlApiarios', {
                            controller: 'controlApiariosController',
                            templateUrl: 'app/template/ControlApiarios.html'
                        }).
                        when('/registrarUsuario', {
                            controller: 'registrarUsuarioController',
                            templateUrl: 'app/template/RegistrarUsuario.html'
                        }).
                        when('/ControlAbejaReina', {
                            controller: 'controlAbejaReinaController',
                            templateUrl: 'app/template/ControlAbejaReina.html'
                        }).
                        when('/registrarMarcos', {
                            controller: 'registrarMarcosController',
                            templateUrl: 'app/template/RegistrarMarcos.html'
                        }).
                        when('/ControlGastos', {
                            controller: 'controlGastosController',
                            templateUrl: 'app/template/ControlGastos.html'
                        }).
                        when('/registrarInventario', {
                            controller: 'registrarInventarioController',
                            templateUrl: 'app/template/RegistrarInventario.html'
                        }).
                        when('/ControlInventario', {
                            controller: 'controlInventarioController',
                            templateUrl: 'app/template/ControlInventario.html'
                        }).
                        when('/registrarColmenas', {
                            controller: 'registrarColmenasController',
                            templateUrl: 'app/template/RegistrarColmenas.html'
                        }).
                        when('/ControlProduccionMiel', {
                            controller: 'controlProduccionMielController',
                            templateUrl: 'app/template/ControlProduccionMiel.html'
                        }).
                        when('/MenuControl', {
                            controller: 'menuControlController',
                            templateUrl: 'app/template/MenuControl.html'
                        }).
                        when('/registrarCamaras', {
                            controller: 'registrarCamarasController',
                            templateUrl: 'app/template/RegistrarCamaras.html'
                        }).
                        when('/registrarApiarios', {
                            controller: 'registrarApiariosController',
                            templateUrl: 'app/template/RegistrarApiarios.html'
                        }).
                        otherwise('/');
            }
        ]);
