app.controller('browse',function($scope,modal){$scope.minPrice=-1;$scope.maxPrice=-1;$scope.priceError=null;$scope.timer=null;$scope.init=function(minPrice,maxPrice){$scope.minPrice=minPrice;$scope.maxPrice=maxPrice;}
$scope.handleOnInputBlur=function(){if(!$("#filter_price_min").is(':focus')&&!$("#filter_price_max").is(':focus')){clearTimeout($scope.timer);$scope.timer=setTimeout(()=>{$scope.search();},300);}}
$scope.handleOnInputFocus=function(){clearTimeout($scope.timer);}
$scope.handleOnInputKeyup=function(e){if(e.keyCode==13&&(e.key+'').toLowerCase()==='enter'){$("#filter_price_min").blur();$("#filter_price_max").blur();$scope.search();}}
$scope.search=function(){clearTimeout($scope.timer);if(($scope.minPrice==0&&$scope.maxPrice==0)||($scope.minPrice===''&&$scope.maxPrice==='')||($scope.minPrice==-1&&$scope.maxPrice==-1)||($scope.minPrice!==''&&$scope.maxPrice!==''&&$scope.minPrice!=-1&&$scope.maxPrice!=-1&&parseInt($scope.minPrice)>parseInt($scope.maxPrice))){if($scope.$$phase||($scope.$root&&$scope.$root.$$phase)){$scope.priceError='Vui lòng điền khoảng giá phù hợp';}else{$scope.$apply(function(){$scope.priceError='Vui lòng điền khoảng giá phù hợp';});}
return;}
if($scope.$$phase||($scope.$root&&$scope.$root.$$phase)){$scope.priceError=null;}else{$scope.$apply(function(){$scope.priceError=null;});}
var url=window.location.href;if($scope.minPrice!==''&&$scope.minPrice!=-1){url=updateQueryStringParameter(url,'minPrice',$scope.minPrice);}else{removeParam('minPrice',url);}
if($scope.maxPrice!==''&&$scope.maxPrice!=-1){url=updateQueryStringParameter(url,'maxPrice',$scope.maxPrice);}else{removeParam('maxPrice',url);}
window.location.href=url;if(url!==window.location.href){window.location.href=url;}}});