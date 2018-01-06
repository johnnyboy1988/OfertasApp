// Ionic Starter App

// angular.module is a global place for creating, registering and retrieving Angular modules
// 'starter' is the name of this angular module example (also set in a <body> attribute in index.html)
// the 2nd parameter is an array of 'requires'
angular.module('starter', ['ionic','controllers'])

.run(function($ionicPlatform) {
  $ionicPlatform.ready(function() {
    if(window.cordova && window.cordova.plugins.Keyboard) {
      // Hide the accessory bar by default (remove this to show the accessory bar above the keyboard
      // for form inputs)
      cordova.plugins.Keyboard.hideKeyboardAccessoryBar(true);

      // Don't remove this line unless you know what you are doing. It stops the viewport
      // from snapping when text inputs are focused. Ionic handles this internally for
      // a much nicer keyboard experience.
      cordova.plugins.Keyboard.disableScroll(true);
    }
    if(window.StatusBar) {
      StatusBar.styleDefault();
    }
  });
})


.config(function($stateProvider,$urlRouterProvider){
  //criar um template, com a estrutura basica
  $stateProvider
    .state('app',{ 
      url:'/app',
      abstract:true,
      templateUrl:'templates/tema.html'
    })
    .state('app.ofertas',{
      url:'/ofertas',
      views:{
        'menuContent':{
          templateUrl:'templates/ofertas.html',
          controller:'OfertasController'
        }
      }
    })
    .state('app.favoritos',{
      url:'/favoritos',
      views:{
        'menuContent':{
          templateUrl:'templates/favoritos.html'
        }
      }
    });
    
  

  //rota padrão
  $urlRouterProvider.otherwise('/app/ofertas');
})