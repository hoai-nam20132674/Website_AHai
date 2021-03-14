app.controller("flashsale-homepage",function($scope,$uibModal){$scope.data=null;$scope.buyTogetherProducts=[];$scope.getFlashsaleProducts=function(){$.ajax({url:baseUrl+"/flashsale/get-products",method:"GET",success:function(res){if(res&&res.success){if(res.flashsaleData&&res.flashsaleData.products&&res.flashsaleData.products.length>0){$scope.$apply(function(){$scope.data=res.flashsaleData;});$scope.prepareFlashSaleProducts();}
if(res.buyTogetherProducts){$scope.$apply(function(){$scope.buyTogetherProducts=res.buyTogetherProducts;});$scope.btg_prepareBuyTogetherProducst();}
$scope.prepareCountdownTime();}}});};$scope.getFlashsaleProducts();$scope.prepareFlashSaleProducts=function(){$("#slideFlashsale").owlCarousel({loop:false,nav:false,dots:true,margin:10,autoplay:true,autoplayHoverPause:true,removeClass:true,navText:['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],responsive:{0:{items:2,nav:false,stagePadding:20,margin:5},600:{items:4,nav:false},1000:{items:6,nav:true,loop:false}},onTranslated:function(){$('body').find('.b__flashsale-cloned').remove();},});$scope.handleMouseOverProductCard();}
$scope.prepareCountdownTime=function(){var arrTime=$(".c-tag-countdown");var countDownDates=[];for(i=0;i<arrTime.length;i++){countDownDates[i]=new Date(arrTime[i].innerText).getTime();}
var x=setInterval(function(){var now=new Date().getTime();for(i=0;i<arrTime.length;i++){if(now>=countDownDates[i]){$(arrTime[i]).addClass('hidden');continue;}
var distance=countDownDates[i]-now;var days=Math.floor(distance/(1000*60*60*24));var hours=Math.floor((distance%(1000*60*60*24))/(1000*60*60));var minutes=Math.floor((distance%(1000*60*60))/(1000*60));var seconds=Math.floor((distance%(1000*60))/1000);var el=arrTime[i];$(el).html('<span class="hour">'+
hours+
'</span><label>:</label><span class="minute">'+
minutes+
'</span><label>:</label><span class="second">'+
seconds+
"</span>");}},1000);}
$scope.buy=function(productObj){var product_addToCart={'name':productObj.name,'id':productObj.id,'price':productObj.salePrice,'category':$('ol li:nth-last-child(2)').text().trim(),'position':1};dataLayer.push({'event':'clickAddToCart','product_addToCart_data':product_addToCart});loading.show();$.ajax({url:baseUrl+'/cart/add-v2',data:{pid:productObj.id,quantity:1,affiliateId:affiliateId},method:'GET',success:function(resp){loading.hide();if(resp.success){location.href=baseUrl+"/gio-hang";order.cartModal(resp.data,buyer,1,0);$rootScope.$emit("CallGetPackageMethod",{});}else{modal.alert(resp.message);}}});};$scope.handleMouseOverProductCard=function(){$("#slideFlashsale .f-items").on('mouseenter',function(){var hoveredItem=$(this);var cloneItem=$(this).clone().on('mouseleave',function(){$('body').find('.b__flashsale-cloned').remove();});$('body').find('.b__flashsale-cloned').remove();var wrapper=$("<div class='b__flashsale-cloned'></div>").css('top',hoveredItem.offset().top).css('left',hoveredItem.offset().left).css('width',hoveredItem.width());$(wrapper).append(cloneItem);$('body').append(wrapper);});}
$scope.btg_prepareBuyTogetherProducst=function(){$("#slideBuyTogetherProducts").owlCarousel({loop:false,nav:false,dots:true,margin:20,autoplay:true,autoplayHoverPause:true,removeClass:true,navText:['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>'],responsive:{0:{items:2,nav:false,stagePadding:20,margin:5},600:{items:3,nav:false},1000:{items:6,nav:true,loop:false}},onTranslated:function(){$('body').find('.b__flashsale-cloned').remove();},});}
$scope.btg_getOriginalPrice=function(productObj){if(productObj.productListPrice&&parseInt(productObj.productListPrice)>parseInt(productObj.productPrice)){return parseInt(productObj.productListPrice);}
return parseInt(productObj.productPrice);}
$scope.btg_getSalePrice=function(productObj){if(productObj.discount){return parseInt(productObj.discount.discountValue);}else{return parseInt(productObj.productPrice);}}
$scope.btg_getSalePercent=function(productObj){if(productObj.discount){return Math.floor(parseFloat(productObj.discount.discountPercent));}else{var price=$scope.btg_getOriginalPrice(productObj);var percent=utils.roundToTwo((price-parseInt(productObj.productPrice))/price*100);return Math.max(Math.floor(percent),0);}}
$scope.btg_getBuyCountProgress=function(productObj){if(productObj.productQuantity<=0){return 0;}
var total=productObj.productQuantity+parseInt(productObj.buyCount);var progress=(parseInt(productObj.buyCount)/total*100);return progress;}});function flashsale_homePage_buy(self){const productId=$(self).attr('pid');const name=$(self).attr('pname');const price=$(self).attr('pprice');var product_addToCart={'name':name,'id':productId,'price':price,'category':$('ol li:nth-last-child(2)').text().trim(),'position':1};dataLayer.push({'event':'clickAddToCart','product_addToCart_data':product_addToCart});loading.show();$.ajax({url:baseUrl+'/cart/add-v2',data:{pid:productId,quantity:1,affiliateId:affiliateId},method:'GET',success:function(resp){loading.hide();if(resp.success){location.href=baseUrl+"/gio-hang";order.cartModal(resp.data,buyer,1,0);$rootScope.$emit("CallGetPackageMethod",{});}else{modal.alert(resp.message);}}});}