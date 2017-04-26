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
                        when('/ConsultaColmenaMala', {
                            controller: 'consultaColmenaMalaController',
                            templateUrl: 'app/template/ConsultasColmenaMalo.html'
                        }).
                        when('/ConsultaColmenaRegular', {
                            controller: 'consultaColmenaRegularController',
                            templateUrl: 'app/template/ConsultasColmenaRegular.html'
                        }).
                        when('/ConsultaReportes', {
                            controller: 'consultaReportesController',
                            templateUrl: 'app/template/ConsultasReportes.html'
                        }).
                        when('/ConsultaReportesDatos', {
                            controller: 'consultaReportesDatosController',
                            templateUrl: 'app/template/ConsultasReportesDatos2.html'
                        }).
                        when('/ConsultaReportesGraficos', {
                            controller: 'consultaReportesGraficosController',
                            templateUrl: 'app/template/ConsultasReportesGraficas2.html'
                        }).
                        when('/consultaInventarios', {
                            controller: 'consultasInventariosController',
                            templateUrl: 'app/template/ConsultaInventarios.html'
                        }).
                        when('/consultaInventarios1', {
                            controller: 'consultaInventarios1Controller',
                            templateUrl: 'app/template/consultaInventarios1.html'
                        }).
                        when('/consultasColmena', {
                            controller: 'consultasColmenaController',
                            templateUrl: 'app/template/ConsultasColmena.html'
                        }).
                        when('/consultasColmenaBueno', {
                            controller: 'consultasColmenaBuenoController',
                            templateUrl: 'app/template/ConsultasColmenaBueno.html'
                        }).
                                when('/MenuRegistrar', {
                            controller: 'controller.menuRegistrar',
                            templateUrl: 'app/template/MenuRegistrar.html'
                        }).
                                 when('/MenuConsultas', {
                            controller: 'controller.menuConsultas',
                            templateUrl: 'app/template/MenuConsultas.html'
                        }).
                        otherwise('/');
            }
        ]);
