angular.module('controllers',['service'])

.controller('OfertasController', function($scope,webservice){
    $scope.titulo = "Ofertas";
    $scope.ofertas = webservice.getOfertas();
})