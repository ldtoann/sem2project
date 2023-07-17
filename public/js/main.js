// var app = angular.module("myApp", ["ngRoute", "firebase"]);

// app.config(function ($routeProvider) {
//   $routeProvider
//     .when("/", {
//       templateUrl: "./page/home.php",
//       controller: "HomeController",
//     })
//     .when("/login", {
//       templateUrl: "./page/login.php",
//       controller: "loginController",
//     })
//     .when("/home2", {
//       templateUrl: "./page/home2.php",
//       controller: "home2Controller",
//     });
// });
// // --------------------------------------------------------------------------------------
// function showProgress() {
//   var loader = document.querySelector(".loader");
//   loader.style.display = "block";
// }

// function hideProgress() {
//   var loader = document.querySelector(".loader");
//   loader.style.display = "none";
// }

// app.service("RestApi", function () {
//   this.load = function (page) {
//     showProgress();
//     return firebase.database().ref(`sneakerstore/${page}`);
//   };
// });
// // --------------------------------------------------------------------------------------

// app.controller("homeController", function ($scope, RestApi) {
//   init();
//   function init() {
//     RestApi.load("items").on("value", (snapshot) => {
//       $scope.items = [];
//       Object.values(snapshot.val()).forEach((item) => {
//         $scope.items.push(item);
//       });

//       //   hideProgress();
//       $scope.$apply();
//     });
//   }
// });
