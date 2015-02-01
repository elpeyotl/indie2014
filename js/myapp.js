//MYAPP

var app = angular.module("MyApp", ['ngSanitize', 'ngAnimate', 'angularMoment']);




app.controller("PostsCtrl", function($scope) {
 	 
	//Put the content into the view from getdata.php
 	$scope.posts = thedata;
 	//console.log(thedata);

    //Make first Item selected
    $scope.selected = 0;

    //Function to make seleceted events as selected
    $scope.select= function(index) {
       $scope.selected = index;
    };

    // Default Sorting of the Events
    $scope.sort = 'date';

    //create Filters
    $scope.filters = {};

    //clear filters
    $scope.clearFilter = function() {
    $scope.filters = {};
    $scope.show = false;
    $scope.search = null;
    };

    $scope.filtered = function() {
    	$scope.show = true;
    };
   

});

