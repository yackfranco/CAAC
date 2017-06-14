angular.module('CAAC').constant('rolAdmin', 'admin');
angular.module('CAAC').constant('rolCelador', 'invitado');


angular.module('CAAC').config(['$middlewareProvider',
    function middlewareProviderConfig($middlewareProvider) {
        $middlewareProvider.map({
            'comprobarSession': ['$localStorage', '$sessionStorage', function comprobarSession($localStorage, $sessionStorage) {
                    middlewareComprobarSession(this, $localStorage, $sessionStorage);
                }],
            'comprobarNoTenerSesion': ['$localStorage', '$sessionStorage', 'rolAdmin', function comprobarPermisoDeCelador($localStorage, $sessionStorage, rolAdmin) {
                    middlewareComprobarNoTenerSesion(this, $localStorage, $sessionStorage, rolAdmin);
                }]
        });
    }]);


angular.module('CAAC').config(['$routeProvider', '$httpProvider', function config($routeProvider, $httpProvider) {
        $httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded; charset=UTF-8';
        $routeProvider.
                when('/', {
                    controller: 'indexController',
                    templateUrl: 'app/template/index.html',
                    middleware: 'comprobarNoTenerSesion'
                }).
                when('/ControlApiarios', {
                    controller: 'controlApiariosController',
                    templateUrl: 'app/template/ControlApiarios.html',
                    middleware: 'comprobarSession'
                }).
                when('/registrarUsuario', {
                    controller: 'registrarUsuarioController',
                    templateUrl: 'app/template/RegistrarUsuario.html',
                    middleware: 'comprobarSession'
                }).
                when('/ControlAbejaReina', {
                    controller: 'controlAbejaReinaController',
                    templateUrl: 'app/template/ControlAbejaReina.html',
                    middleware: 'comprobarSession'
                }).
                when('/registrarMarcos', {
                    controller: 'registrarMarcosController',
                    templateUrl: 'app/template/RegistrarMarcos.html',
                    middleware: 'comprobarSession'
                }).
                when('/ControlGastos', {
                    controller: 'controlGastosController',
                    templateUrl: 'app/template/ControlGastos.html',
                    middleware: 'comprobarSession'
                }).
                when('/registrarInventario', {
                    controller: 'registrarInventarioController',
                    templateUrl: 'app/template/RegistrarInventario.html',
                    middleware: 'comprobarSession'
                }).
                when('/ControlInventario', {
                    controller: 'controlInventarioController',
                    templateUrl: 'app/template/ControlInventario.html',
                    middleware: 'comprobarSession'
                }).
                when('/registrarColmenas', {
                    controller: 'registrarColmenasController',
                    templateUrl: 'app/template/RegistrarColmenas.html',
                    middleware: 'comprobarSession'
                }).
                when('/ControlProduccionMiel', {
                    controller: 'controlProduccionMielController',
                    templateUrl: 'app/template/ControlProduccionMiel.html',
                    middleware: 'comprobarSession'
                }).
                when('/MenuControl', {
                    controller: 'menuControlController',
                    templateUrl: 'app/template/MenuControl.html',
                    middleware: 'comprobarSession'
                }).
                when('/registrarCamaras', {
                    controller: 'registrarCamarasController',
                    templateUrl: 'app/template/RegistrarCamaras.html',
                    middleware: 'comprobarSession'
                }).
                when('/registrarApiarios', {
                    controller: 'registrarApiariosController',
                    templateUrl: 'app/template/RegistrarApiarios.html',
                    middleware: 'comprobarSession'
                }).
                when('/ConsultaColmenaMala', {
                    controller: 'consultaColmenaMalaController',
                    templateUrl: 'app/template/ConsultasColmenaMalo.html',
                    middleware: 'comprobarSession'
                }).
                when('/ConsultaColmenaRegular', {
                    controller: 'consultaColmenaRegularController',
                    templateUrl: 'app/template/ConsultasColmenaRegular.html',
                    middleware: 'comprobarSession'
                }).
                when('/ConsultaReportes', {
                    controller: 'consultaReportesController',
                    templateUrl: 'app/template/ConsultasReportes.html',
                    middleware: 'comprobarSession'
                }).
                when('/ConsultaReportesDatos', {
                    controller: 'consultaReportesDatosController',
                    templateUrl: 'app/template/ConsultasReportesDatos2.html',
                    middleware: 'comprobarSession'
                }).
                when('/ConsultaReportesGraficos', {
                    controller: 'consultaReportesGraficosController',
                    templateUrl: 'app/template/ConsultasReportesGraficas2.html',
                    middleware: 'comprobarSession'
                }).
                when('/consultaInventarios', {
                    controller: 'consultasInventariosController',
                    templateUrl: 'app/template/ConsultaInventarios.html',
                    middleware: 'comprobarSession'
                }).
                when('/consultaInventarios1', {
                    controller: 'consultaInventarios1Controller',
                    templateUrl: 'app/template/consultaInventarios1.html',
                    middleware: 'comprobarSession'
                }).
                when('/consultasColmena', {
                    controller: 'consultasColmenaController',
                    templateUrl: 'app/template/ConsultasColmena.html',
                    middleware: 'comprobarSession'
                }).
                when('/consultasColmenaBueno', {
                    controller: 'consultasColmenaBuenoController',
                    templateUrl: 'app/template/ConsultasColmenaBueno.html',
                    middleware: 'comprobarSession'
                }).
                when('/MenuRegistrar', {
                    controller: 'menuRegistrarController',
                    templateUrl: 'app/template/MenuRegistrar.html',
                    middleware: 'comprobarSession'
                }).
                when('/MenuConsultas', {
                    controller: 'menuConsultasController',
                    templateUrl: 'app/template/MenuConsultas.html',
                    middleware: 'comprobarSession'
                }).
                when('/copyRight', {
                    controller: 'copyRightController',
                    templateUrl: 'app/template/CopyRight.html',
                    middleware: 'comprobarSession'
                }).
                otherwise('/');
    }
]);
