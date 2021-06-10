var app = angular.module('mod', []);

app.controller('sale_form_ctr', function($scope){
    // $scope.numrows = 0;
    $scope.newarr = new Array();
    $scope.arr_tmp = new Array();
    $scope.sr = 1;
    $scope.id = 0;

    $scope.addRow = function (){

        $scope.$arr = {
            sr: $scope.sr++, 
            item: $('#product_search').val(), 
            quantity: $('#qty').val(),
            qty_packs: $('#qty_packs').val(),
            price: $('#price').val(),
            discounts: $('#discounts').val(),
            sale_discount: $('#sale_discount').val(),
            subtotal: $('#price').val() * $('#qty').val()
        };
        $scope.newarr.push($scope.$arr);
        $scope.resetAddToBillValues();
    }
    $scope.deleteRow = function (index){
        $scope.sr = 1;
        angular.forEach($scope.newarr, function(value, key) {
            value.sr = $scope.sr;
            if(value.item != index){
                $scope.arr_tmp.push(value);
                $scope.sr++;
            }
        });
        $scope.newarr = $scope.arr_tmp;
        $scope.arr_tmp = new Array();
    }
    $scope.resetAddToBillValues = function(){
        $('#product_barcode_search').val(""),
        $('#product_search').val(""),
        $('#qty').val(1),
        $('#qty_packs').val(""),
        $('#price').val(""),
        $('#discounts').val(""),
        $('#sale_discount').val("");
    }
});