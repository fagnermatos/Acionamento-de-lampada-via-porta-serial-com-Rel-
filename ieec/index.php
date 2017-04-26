<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href='//fonts.googleapis.com/css?family=Abel' rel='stylesheet'>

<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http, $interval) {
  //$http.get("teste.php");
  
  $scope.theTime = new Date().toLocaleTimeString();
  $interval(function () {
      $scope.theTime = new Date().toLocaleTimeString();
  }, 1000);

  $scope.imagem = 'lamp1.jpg';
  $scope.estado = "Desligado";
  $scope.ligar = function(){
       
        $http.get("ligar.php");
        $scope.imagem = 'lamp2.jpg';
        $scope.estado = "Ligado";
  }
  $scope.desligar = function(){

        $http.get("desligar.php");
        $scope.imagem = 'lamp1.jpg';
        $scope.estado = "Desligado";
  }

});
</script>

<style>
.w3-button {width:80%;}
body {
    font-family: 'Abel';font-size: 22px;
}
h2 {font-family: 'Abel';font-size: 31px;}
</style>



<body>

<div class="w3-light-grey" ng-app="myApp" ng-controller="myCtrl"> 

<div class="w3-container w3-center w3-text-white w3-black">


  <h2>Sistema de acionamento de cargas<h2>
</div>

<div  class="w3-center">
<div  style="min-width: 333px; max-width: 444px;">
<h1>{{content}}</h1>
{{theTime}}<br>

<img ng-src="{{imagem}}" alt="Avatar" style="width:33%">
  <h5>{{estado}}</h5>

<input class="w3-button w3-dark-gray" type="submit" ng-click="ligar()" name="ligar" value="LIGAR"><br>
<input class="w3-button w3-purple" type="submit" ng-click="desligar()" name="desligar" value="DESLIGAR"><br><br>

</div>
</div>
<div class="w3-container w3-center w3-black">
  <p>Dsenvolvido por Fagner Matos</p>
</div>
</div>
</body>
</html>

