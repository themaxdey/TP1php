var app = angular.module('linkedlists', []);
// The path to action from CakePHP is in urlToLinkedListRequest 
app.controller('paysController', function ($scope, $http) {


    $scope.selectedVilleId = selectedVilleId;
    $scope.selectedPaysId = selectedPaysId;
    var url = urlToLinkedListRequest;
    $http.get(url).then(function (response) {
        $scope.pays = response.data;
        angular.forEach($scope.pays, function (pays) {
            if (pays.id == selectedPaysId) {
                $scope.pays = pays;
                angular.forEach($scope.pays.villes, function (ville) {
                    if (ville.id == selectedVilleId) {
                        $scope.pays.ville = ville;
                    }
                })
            }
        })
    });

});


