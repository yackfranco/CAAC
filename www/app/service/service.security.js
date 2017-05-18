angular.module('CAAC').service('securityService', ['$http', function($http){
    
    this.validateUserAndPassword = function (data) {
      return $http.post('http://localhost/caac/www/server.php/identificar', $.param(data));
//      return $http.get('http://localhost/caac/www/server.php/identificar', {params: data});
    };

    // this.getUser = $http.get('http://localhost/cras/www/server.php/obtener_usuarios');
    
}]);