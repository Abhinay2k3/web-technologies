<!DOCTYPE html>
<html ng-app="searchApp">
<head>
    <title>Search Engine</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.8.2/angular.min.js"></script>
</head>
<body ng-controller="SearchController">
    <h1>Search Engine</h1>
    
    <label for="searchQuery">Search: </label>
    <input type="text" id="searchQuery" ng-model="query" ng-keyup="search()" autofocus>

    <ul>
        <li ng-repeat="result in results">{{ result }}</li>
    </ul>

    <script>
        var app = angular.module('searchApp', []);

        app.controller('SearchController', function($scope) {
            $scope.results = [];
            $scope.data = [
                'Apple', 'Banana', 'Cherry', 'Date', 'Grape', 'Lemon', 'Mango',
                'Orange', 'Peach', 'Pear', 'Pineapple', 'Strawberry', 'Watermelon'
            ];

            $scope.search = function() {
                var query = $scope.query.toLowerCase();
                $scope.results = $scope.data.filter(function(item) {
                    return item.toLowerCase().includes(query);
                });
            };
        });
    </script>
</body>
</html>
