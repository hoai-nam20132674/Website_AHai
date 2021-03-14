app.controller('search',function($scope,$uibModal,modal,order){$scope.categoryName="Danh mục";$scope.categoryId='0';$scope.suggests=[];$scope.buyer=buyer;$scope.keyword='';if(typeof(keyword)!=='undefined'){$scope.keyword=keyword;}
$scope.search=function(type=null){if($scope.keyword==null||$scope.keyword==''){return;}
loading.show();var lt=/</g,gt=/>/g,ap=/'/g,ic=/"/g;$scope.keyword=$scope.keyword.toString().replace(lt,"&lt;").replace(gt,"&gt;").replace(ap,"&#39;").replace(ic,"&#34;");$.ajax({url:baseUrl+'/site/keyword?keyword='+$scope.keyword,method:'GET',success:function(resp){loading.hide();let urlSearch='';if($scope.categoryId==0){urlSearch=baseUrl+'/tim-kiem-'+utils.createAlias($scope.keyword)+'?q='+$scope.keyword;}else{urlSearch=baseUrl+'/tim-kiem-'+utils.createAlias($scope.keyword)+'/'+utils.createAlias($scope.categoryName)+'-c'+$scope.categoryId;}
if(type==2){urlSearch=urlSearch+'&type='+type;}
document.location=urlSearch;}});};$scope.choose=function(){}
$scope.type=function(){return;$.ajax({url:baseUrl+'/site/suggest?keyword='+$scope.keyword,method:'GET',success:function(resp){if(resp.success){}}});};$scope.selectCategory=function(){$scope.categoryName=$('.cat-'+$scope.categoryId).attr('cat-name');}
$scope.enterSearch=function(e,type=null){if(e.keyCode==13){$scope.search(type);}}});$('#browse-order').change(function(){if($(this).val()!=0)
location.href=updateQueryStringParameter(location.href,'order',$('option:selected',this).val());else
location.href=removeParam('order',location.href);});var order=getParameterByName('order',location.href);if(order)
$('#browse-order').val(order);$('.radio.active').parent().parent().prev().addClass('active');function choose(e){location.href=$(e).attr('url');}