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
                        when('/ControlAbejaReina', {
                            controller: 'controlAbejaReinaController',
                            templateUrl: 'app/template/ControlAbejaReina.html'
                        }).
                        when('/ControlGastos', {
                            controller: 'controlGastosController',
                            templateUrl: 'app/template/ControlGastos.html'
                        }).
                        when('/ControlInventario', {
                            controller: 'controlInventarioController',
                            templateUrl: 'app/template/ControlInventario.html'
                        }).
                        when('/ControlProduccionMiel', {
                            controller: 'controlProduccionMielController',
                            templateUrl: 'app/template/ControlProduccionMiel.html'
                        }).
                        when('/MenuControl', {
                            controller: 'menuControlController',
                            templateUrl: 'app/template/MenuControl.html'
                        }).
                        otherwise('/');
            }
        ]);