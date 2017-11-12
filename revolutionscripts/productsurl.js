/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

angular.module("productApp", [])
        .constant("baseUrl", "http://localhost:9000/acceptancetestclbs2016/api/product/")        
        .controller("productCtrl", function ($scope, $http, baseUrl) {
            $scope.displayMode = "list";
            $scope.currentProduct = null;

            $scope.listProducts = function () {
                $http.get(baseUrl).success(function (data) {
                    $scope.products = data;
                });
            };

            $scope.deleteProduct = function (product) {
                $scope.products.splice($scope.products.indexOf(product, 1));
            };

            $scope.createProduct = function (product) {
                $scope.products.push(product);
                $scope.displayMode = "list";
            };

            $scope.updateProduct = function (product) {
                for (var i = 0; i < $scope.products.length; i++) {
                    if ($scope.products[i].id === product.id) {
                        $scope.products[i] = product;
                        break;
                    }
                }
                $scope.displayMode = "list";
            };

            $scope.editOrCreateProduct = function (product) {
                $scope.currentProduct = product ? angular.copy(product) : {};
                $scope.displayMode = "edit";
            };

            $scope.saveEdit = function (product) {
                if (angular.isDefined(product.id)) {
                    $scope.updateProduct(product);
                } else
                {
                    $scope.createProduct(product);
                }
            };

            $scope.cancelEdit = function () {
                $scope.currentProduct = {};
                $scope.displayMode = "list";
            };

            $scope.listProducts();
        });

