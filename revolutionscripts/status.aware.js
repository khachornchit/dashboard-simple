/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var statusApp = angular
        .module("statusModule", [])
        .controller("myController", function ($scope) {
            function studentController($scope, $http) {
                var url = "data.txt";
                $http.get(url).success(function (response) {
                    $scope.students = response;
                });
            }
            ;
            var employees = [
                {firstName: "Ben", lastName: "Hastings", gender: "Male", salary: 55000},
                {firstName: "Sara", lastName: "Paul", gender: "Female", salary: 68000},
                {firstName: "Mark", lastName: "Holland", gender: "Male", salary: 57000},
                {firstName: "Pam", lastName: "Macintosh", gender: "Female", salary: 53000},
                {firstName: "Todd", lastName: "Barber", gender: "Male", salary: 60000}
            ];

            $scope.employees = employees;
        });


