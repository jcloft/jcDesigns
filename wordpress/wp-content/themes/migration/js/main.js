var app = angular.module('webApp', ['ngRoute']);

/* Configure the Routes */

app.config(['$routeProvider', function($routeProvider) {
    $routeProvider
// Home
        .when("/", {templateUrl: mainJS.partials + 'home.php', controller: "PageCtrl"})
        .when("/home", {templateUrl: mainJS.partials + "home.php", controller: "PageCtrl"})

}]);