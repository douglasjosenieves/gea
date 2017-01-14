<!DOCTYPE html>
<html lang="es" ng-app="miapp" ng-controller="control">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Title Page</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1 class="text-center">Hello World</h1>
<form class="form-horizontal" ng-submit="guardar()">
<fieldset>

<!-- Form Name -->
<legend>Form Name</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4  control-label" for="nombre">Nombre</label>  
  <div class="col-md-4">
  <input id="nombre" required ng-model="nombre" name="nombre" type="text" placeholder="Nombre" class="form-control input-md">
  <span class="help-block">Complete el campo</span>  
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="apellido">Apellido</label>  
  <div class="col-md-4">
  <input id="apellido" required ng-model="apellido" name="apellido" type="text" placeholder="apellido " class="form-control input-md">
  <span class="help-block">Complete el campo</span>  
  </div>
</div>

<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id">Double Button</label>
  <div class="col-md-8">
    <button id="button1id" type="submit" name="button1id" class="btn btn-success">Good Button</button>
    <button type="reset" id="button2id" name="button2id" class="btn btn-danger">Scary Button</button>
  </div>
</div>

</fieldset>
</form>



<div class="col-md-12">
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">Developers</h3>
            <div class="pull-right">
              <span class="clickable filter" data-toggle="tooltip" title="Toggle table filter" data-container="body">
                <i class="glyphicon glyphicon-filter"></i>
              </span>
            </div>
          </div>
          <div class="panel-body">
            <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Filter Developers" />
          </div>
          <table class="table table-hover" id="dev-table">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Apellido</th>
               
              </tr>
            </thead>
            <tbody>
             

              <tr ng-repeat="usuario in nombres">
             
                <td>{{usuario}}</td>
                <td>{{apellidos[$index]}}</td>
             
              </tr>
          
           
            </tbody>
          </table>
        </div>
      </div>

    <!-- jQuery -->
    <script src="//code.jquery.com/jquery.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
 
    <!-- Bootstrap JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   
<script type="text/javascript">
  
var app = angular.module('miapp', []);

app.controller("control", ['$scope', function($scope, $http) {
  

  $scope.nombres = ['douglas'];
  $scope.apellidos = ['nieves'];
$scope.guardar = function ( ) {
 
$scope.nombres.push($scope.nombre);
$scope.apellidos.push($scope.apellido);
  // body...

  $scope.nombre='';
    $scope.apellido='';
}


var dataObj = {
        nombre : $scope.nombre,
       apellido : $scope.apellido,
      
    };

 var res = $http.post('/savecompany_json', dataObj);
    res.success(function(data, status, headers, config) {
      $scope.message = data;
    });
    res.error(function(data, status, headers, config) {
      alert( "failure message: " + JSON.stringify({data: data}));
    });   
    // Making the fields empty
    //
    $scope.name='';
    $scope.employees='';
    $scope.headoffice='';
 

}])


</script>

  </body>
</html>