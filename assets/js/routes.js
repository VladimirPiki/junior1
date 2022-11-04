app.config(function($routeProvider) {
    $routeProvider
    .when("/details_products", {
      templateUrl : "view/details_products.html",
      controller:"myCtrl"
    })
  });