angular.module('CAAC').service('crudUsuarioService', ['$http', function ($http) {

        this.crud = function (data) {
//            console.log(data);
            return $http.post('http://localhost/caac/www/server.php/CRUDUsuario', $.param(data));
//      return $http.get('http://localhost/caac/www/server.php/identificar', {params: data});
        };

        // this.getUser = $http.get('http://localhost/cras/www/server.php/obtener_usuarios');

    }]);