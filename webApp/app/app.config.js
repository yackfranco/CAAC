angular.module('Restaurante').
        config(['$routeProvider',
            function config($routeProvider) {
                $routeProvider.
                        when('/', {
                            controller: 'indexController',
                            templateUrl: 'app/template/index.html'
                        }).
                        when('/Catalogo', {
                            controller: 'catalogoController',
                            templateUrl: 'app/template/Catalogo.html'
                        }).
                        when('/Empanadas', {
                            controller: 'empanadasController',
                            templateUrl: 'app/template/Empanadas.html'
                        }).
                        when('/Hamburguesa', {
                            controller: 'hamburguesaProController',
                            templateUrl: 'app/template/Hamburguesa.html'
                        }).
                        when('/Hotdog', {
                            controller: 'hotdogController',
                            templateUrl: 'app/template/Hotdog.html'
                        }).
                        when('/Pizza', {
                            controller: 'pizzaController',
                            templateUrl: 'app/template/Pizza.html'
                        }).
                        otherwise('/');
            }
        ]);