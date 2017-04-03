<!DOCTYPE html>
<html ng-app="CAAC">
    <head>
        <meta charset="UTF-8">
        <title>Restaurante</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        <div class="container container-fluid" ng-view ng-cloak></div>
        
        <script src="js/angular-1.6.1/angular.min.js" type="text/javascript"></script>
        <script src="js/angular-1.6.1/angular-route.min.js" type="text/javascript"></script>
        <script src="js/angular-1.6.1/angular-resource.min.js" type="text/javascript"></script>
        
        <script src="js/jquery-1.12.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <script src="app/app.js" type="text/javascript"></script>
        <script src="app/app.config.js" type="text/javascript"></script>
        
        <script src="app/controller/controller.index.js" type="text/javascript"></script>
        <script src="app/controller/controller.Catalogo.js" type="text/javascript"></script>
        <script src="app/controller/controller.Empanadas.js" type="text/javascript"></script>
        <script src="app/controller/controller.Hamburguesa.js" type="text/javascript"></script>
        <script src="app/controller/controller.Hotdog.js" type="text/javascript"></script>
        <script src="app/controller/controller.Pizza.js" type="text/javascript"></script>
    </body>
</html>
  


