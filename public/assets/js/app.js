// makes sure the whole site is loaded
      jQuery(window).on('load',function() {
              // will first fade out the loading animation
        jQuery("#status").fadeOut();
              // will fade out the whole DIV that covers the website.
        jQuery("#preloader").delay(1000).fadeOut("slow");

       jQuery(".navbar-nav li a").click(function(event) {
        jQuery(".navbar-collapse").collapse('hide');
      });

      })
    

var myapp = angular.module('myapp', [
      "ui.router", 
      "ngAnimate",
      "ngMask"
  ])
    myapp.config(function($stateProvider, $urlRouterProvider){
      
      // For any unmatched url, send to /route1
      $urlRouterProvider.otherwise("/")
      
      $stateProvider
        .state('/', {
            url: "/",
            templateUrl: "html/home.html"
        })
                    
        .state('conheca', {
            url: "/conheca",
            templateUrl: "html/conheca.html"
        })

       

         .state('fale', {
            url: "/fale",
            templateUrl: "html/fale.html"
        })

          .state('voce', {
            url: "/voce",
            templateUrl: "html/voce.html"
        })
           .state('apoie', {
            url: "/apoie",
            templateUrl: "html/apoie.html"
        })
          
    })

    // Code goes here
.animation('.reveal-animation', function() {
  return {
    enter: function(element, done) {
      element.css('display', 'none');
      element.fadeIn(500, done);
      return function() {
        element.stop();
      }
    },
    leave: function(element, done) {
      element.fadeOut(500, done)
      return function() {
        element.stop();
      }
    }
  }
})