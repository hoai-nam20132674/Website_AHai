function replaceWithFn(str, p1, p2, p3) {
    return '<div class="auto-resizable-iframe"><div><iframe  src="' + p2 + '" frameborder="0" allowfullscreen ' + p3 + '></iframe></div></div>';
}

if (typeof selectedProperties !== 'undefined') {
    $.each(selectedProperties, function(k, v) {
        $('.b__detail--wapper .product-property input[property=' + k + '][for=' + v + ']').addClass('selected');
        $('.b__detail--wapper .product-property input[property=' + k + '][for=' + v + ']').parent().addClass('active');
    });
}

function selectProperty(e) {
    e = $(e).find('input');
    $(e).addClass('selected');
    $('.b__detail--wapper .product-property input[for]').removeClass('disabled');

    selectedValue = $(e).val();
    variationId = $('.b__detail--wapper .product-property input[for=' + selectedValue + ']').attr('product');
    propertyId = $('.b__detail--wapper .product-property input[for=' + selectedValue + ']').attr('property');

    if (selectedValue != 0) {
        $('.b__detail--wapper .product-property input[property!=' + propertyId + ']').parent().addClass('disabled');
        $.each(variationDimention, function(i, v) {
            if (v.properties.filter(e => e.productPropertyValueId == selectedValue).length > 0) {
                $.each(v.properties, function(i1, v1) {
                    if (v1.productPropertyId != propertyId) {
                        $('.b__detail--wapper .product-property input[for=' + v1.productPropertyValueId + ']').parent().removeClass('disabled');
                    }
                });

            }
        });
    }

    var selectedArr = [];
    $.each($('.b__detail--wapper .product-property .selected'), function(i, v) {
        selectedArr.push($(v).val());
    });

    $.each(variationDimention, function(i, v) {
        matchCount = v.properties.length;
        $.each(selectedArr, function(i2, v2) {
            if (v.properties.filter(x => x.productPropertyValueId == v2).length > 0) {
                matchCount = matchCount - 1;
            }
        });
        if (matchCount == 0 && v.id != variation.id) {
            location.href = v.url;
        }
    });
}

function filterList(q, list) {
    function escapeRegExp(s) {
        return s.replace(/[-/\\^$*+?.()|[\]{}]/g, "\\$&");
    }
    const words = q
        .split(/\s+/g)
        .map(s => s.trim())
        .filter(s => !!s);
    const hasTrailingSpace = q.endsWith(" ");
    const searchRegex = new RegExp(
        words
        .map((word, i) => {
            if (i + 1 === words.length && !hasTrailingSpace) {
                return `(?=.*\\b${escapeRegExp(word)})`;
            } else {
                return `(?=.*\\b${escapeRegExp(word)}\\b)`;
            }
        })
        .join("") + ".+",
        "gi"
    );
    return list.filter(item => {
        return searchRegex.test(item.description);
    });
}

// app.controller('product', function ($scope, $rootScope, $uibModal, modal, order, $sce,auth,$q,$timeout) {

app.controller('product', function($scope, $uibModal, $rootScope, $rootScope, order, modal, localStorageService, auth, $location, $sce) {


    $scope.item = product;
    $scope.product = product;
    $scope.variation = variation;
    $scope.salePercent = variation.listPrice && variation.listPrice > variation.price ? utils.roundToTwo(100 - variation.price / variation.listPrice * 100) : null;
    $scope.buyer = buyer;
    $scope.quantity = 1;
    $scope.descriptionDetail = '';
    $scope.action = 'detail';
    $scope.likeCount = likeCount;
    $scope.status = status;
    $scope.variationDimention = variationDimention;
    $scope.properties = [];
    $scope.radio = [];
    $scope.bProperty = [];
    $scope.scratchCardNameId = 1;
    $scope.scratchCardType = 1;
    $scope.data = [];
    $scope.checkBuyTogetherFirst = checkBuyTogetherFirst == 1 ? true : false;
    $scope.buyTogetherData = null;
    $scope.isFreeshipByCommissionForSystem = isFreeshipByCommissionForSystem == 1 ? true : false;

    for (var i = 0; i <= 10; i++) {
        $scope.bProperty[i] = {
            productId: ''
        };
    }
    $scope.onSale = null;
    // $scope.provinceId = 0;


    $scope.provinces = JSON.parse(localStorage.getItem('provinces'));
    if ($scope.provinces != null) {
        $scope.provinces = $scope.provinces.slice(1);
    }

    $scope.districts = JSON.parse(localStorage.getItem('districts'));

    $scope.shippingAvailable = false;
    $scope.showCheck = false;
    $scope.checkmessage = '';
    $scope.limitDistricts = [];

    var checkProvince = [];


    $scope.provinceLimit = {
        id: 66,
        description: 'Hà nội',
    };

    $scope.districtLimit = {
        id: 23,
        name: 'Quận Thanh xuân',
    };

    $scope.wardLimit = {
        id: 117,
        name: 'Xã Nhân Chính',
    };

    if (
        typeof(buyer) !== 'undefined' &&
        (buyer.province !== null && typeof(buyer.province.name) !== 'undefined') &&
        (buyer.district !== null && typeof(buyer.district.name) !== 'undefined') &&
        (buyer.ward !== null && typeof(buyer.ward.name) !== 'undefined')
    ) {
        $scope.provinceLimit = {
            id: buyer.buyerProvinceId,
            description: buyer.province.name,
        };

        $scope.districtLimit = {
            id: buyer.buyerDistrictId,
            name: buyer.district.name,
        };

        $scope.wardLimit = {
            id: buyer.buyerWardId,
            name: buyer.ward.name,
        };
    }

    $scope.searchProvinceLocation = '';
    $scope.searchDistrictLocation = '';
    $scope.searchWardLocation = '';
    $scope.provinceList = angular.copy($scope.provinces);
    $scope.districtList = [];
    $scope.wardList = [];

    $scope.changeProvinceSearch = function() {
        if ($scope.searchProvinceLocation != '') {
            var getProvinces = $scope.provinces.filter(function(d) {
                var s11 = utils.removeDiacriticalV(d.description);
                var s21 = utils.removeDiacriticalV($scope.searchProvinceLocation);
                var s31 = s11.split(s21);
                if (s31[0] !== s11) {
                    return true;
                }
                var s12 = d.description.toLowerCase();
                var s22 = $scope.searchProvinceLocation.toLowerCase();
                var s32 = s12.split(s22);
                if (s32[0] !== s12) {
                    return true;
                }
                return false;
            });
            if (getProvinces.length > 0) {
                $scope.provinceList = getProvinces;
            } else {
                $scope.provinceList = [];
            }
        } else {
            $scope.provinceList = angular.copy($scope.provinces);
        }
    };

    $scope.changeDistrictSearch = function() {
        var cloneDistricts = [];
        $scope.districtList = cloneDistricts;
        if (typeof($scope.provincePopupLimit) !== 'undefined' && $scope.provincePopupLimit.id * 1 > 0) {
            cloneDistricts = $scope.districts.filter(function(d) {
                return d.provinceId * 1 == $scope.provincePopupLimit.id * 1;
            });
            $scope.districtList = cloneDistricts;

            if ($scope.searchDistrictLocation != '') {
                var getDistricts = cloneDistricts.filter(function(d) {
                    // filter theo từ khóa được xử lý về chữ thường bỏ dấu
                    var s11 = utils.removeDiacriticalV(d.name);
                    var s21 = utils.removeDiacriticalV($scope.searchDistrictLocation);
                    var s31 = s11.split(s21);
                    if (s31[0] !== s11) {
                        return true;
                    }
                    // filter theo từ khóa được xử lý về chữ thường có dấu
                    var s12 = d.name.toLowerCase();
                    var s22 = $scope.searchDistrictLocation.toLowerCase();
                    var s32 = s12.split(s22);
                    if (s32[0] !== s12) {
                        return true;
                    }
                    return false;
                });
                if (getDistricts.length > 0) {
                    $scope.districtList = getDistricts;
                } else {
                    $scope.districtList = [];
                }
            }
        }
    };

    $scope.changeWardSearch = function() {
        var cloneWards = [];
        $scope.wardList = cloneWards;

        if (typeof($scope.districtLimit) !== 'undefined' && $scope.districtLimit.id * 1 > 0) {
            cloneWards = $scope.wards.filter(function(d) {
                return d.district_id * 1 == $scope.districtLimit.id * 1;
            });
            $scope.wardList = cloneWards;
            if ($scope.searchWardLocation != '') {
                var getWards = cloneWards.filter(function(d) {
                    // filter theo từ khóa được xử lý về chữ thường bỏ dấu
                    var s11 = utils.removeDiacriticalV(d.name);
                    var s21 = utils.removeDiacriticalV($scope.searchWardLocation);
                    var s31 = s11.split(s21);
                    if (s31[0] !== s11) {
                        return true;
                    }
                    // filter theo từ khóa được xử lý về chữ thường có dấu
                    var s12 = d.name.toLowerCase();
                    var s22 = $scope.searchWardLocation.toLowerCase();
                    var s32 = s12.split(s22);
                    if (s32[0] !== s12) {
                        return true;
                    }
                    return false;
                });
                if (getWards.length > 0) {
                    $scope.wardList = getWards;
                } else {
                    $scope.wardList = [];
                }
            }
        }
    };

    $scope.funcCheckDistrict = function() {
        if ($scope.product.limitShippingDistricts == '' || $scope.product.limitShippingDistricts == null) {
            var limitDistricts = [];
        } else {
            var limitDistricts = JSON.parse($scope.product.limitShippingDistricts);
        }

        if ($scope.product.limitShippingProvinces == '' || $scope.product.limitShippingProvinces == null) {
            var limitProvinces = [];
        } else {
            var limitProvinces = JSON.parse($scope.product.limitShippingProvinces);
        }

        if ($scope.product.limitShippingWards == '' || $scope.product.limitShippingWards == null) {
            var limitWards = [];
        } else {
            var limitWards = JSON.parse($scope.product.limitShippingWards);
        }

        var provinceId = $scope.provinceLimit.id;
        if (limitProvinces != null && limitProvinces.length > 0) {
            checkProvince = limitProvinces.filter(function(p) {
                return p.id == provinceId;
            });
        }
        var checkDistrictt = [];
        if (limitDistricts != null && limitDistricts.length > 0) {
            checkDistrictt = limitDistricts.filter(function(d) {
                return d.provinceId == provinceId;
            });
        }
        var checkWardt = [];
        if (limitWards != null && limitWards.length > 0) {
            checkWardt = limitWards.filter(function(d) {
                return d.district_id == provinceId;
            });
        }
        if (checkProvince.length > 0 && checkDistrictt.length == 0) {
            $scope.shippingAvailable = true;
            $scope.checkmessage = 'Khu vực này được hỗ trợ giao hàng';
            return;
        }

        $scope.checkmessage = '';
        $scope.shippingAvailable = false;
        var newDistrictId = $scope.districtLimit.id;
        var newProvinceId = $scope.provinceLimit.id;
        var newWardId = $scope.wardLimit.id;

        var flag = true;
        var checkDistrict = [];
        var checkPDistrict = [];
        if (limitDistricts != null && limitDistricts.length > 0) {
            checkDistrict = limitDistricts.filter(function(d) {
                return d.provinceId == newProvinceId;
            });
            checkPDistrict = checkDistrict.filter(function(pd) {
                return pd.id == newDistrictId;
            });
        };

        if (limitDistricts != null && limitDistricts.length > 0 && checkPDistrict.length == 0 && checkProvince.length > 0 && checkDistrict.length > 0) {
            flag = false;
        }
        if (parseInt(newDistrictId) > 0 && flag && checkProvince.length > 0) {
            $scope.shippingAvailable = true;
            $scope.checkmessage = 'Khu vực này được hỗ trợ giao hàng';
        } else {
            if (parseInt(newDistrictId) > 0) {
                $scope.shippingAvailable = false;
                $scope.checkmessage = 'Xin lỗi, người bán không hỗ trợ giao sản phẩm này đến khu vực bạn đã chọn.';
            }
        }
    };
    $scope.funcCheckDistrict();

    $scope.showPopupAddress = function() {
        $('#popup_location').show();
        $('#btn-close-popup-location').show();
        $('#provinces').show();
        $('#province-input-text').show();
        $('#districts').hide();
        $('#district-input-text').hide();
        $('#wards').hide();
        $('#ward-input-text').hide();
    };

    $scope.showPopupWardAddress = function() {
        $('#popup_location').show();
        $('#btn-close-popup-location').show();
        $('#provinces').hide();
        $('#province-input-text').hide();
        $('#districts').hide();
        $('#district-input-text').hide();
        $('#wards').show();
        $('#ward-input-text').show();
    };

    $scope.setProvinceId = function(province) {
        $('#provinces').hide();
        $('#province-input-text').hide();
        $('#districts').show();
        $('#district-input-text').show();
        $('#wards').hide();
        $('#ward-input-text').hide();
        $scope.provincePopupLimit = province;
        limitDistricts = $scope.districts.filter(function(d) {
            return d.provinceId == $scope.provincePopupLimit.id;
        });
    };

    $scope.setDistrictId = function(district) {
        $('#popup_location').show();
        $('#btn-close-popup-location').show();
        $('#provinces').hide();
        $('#province-input-text').hide();
        $('#districts').hide();
        $('#district-input-text').hide();
        $('#wards').show();
        $('#ward-input-text').show();
        $scope.districtLimit = district;
        $scope.provinceLimit = $scope.provincePopupLimit;
        $scope.funcCheckDistrict();
    };
    $scope.setWardId = function(ward) {
        $('#popup_location').hide();
        $('#btn-close-popup-location').hide();
        $('#provinces').hide();
        $('#province-input-text').hide();
        $('#districts').hide();
        $('#district-input-text').hide();
        $('#wards').hide();
        $('#ward-input-text').hide();
        $scope.wardLimit = ward;
        $scope.districtLimit = $scope.districtLimit;
        $scope.provinceLimit = $scope.provincePopupLimit;
        $scope.funcCheckDistrict();
    };

    $scope.closePopupAddress = function() {
        $('#popup_location').hide();
        $('#btn-close-popup-location').hide();
    };

    /*
     * function replaceWithFn ở đầu file này.
     */

    $scope.convertTAYouTubeMarkupToIframe = function(str) {
        if (!str) {
            return str;
        }
        var regExp = /<img class="ta-insert-video" src="(.*?)" ta-insert-video="(.*?)" contenteditable="false" allowfullscreen="true" frameborder="0"(.*?)\/>/g;
        str = str.replace(regExp, replaceWithFn);
        return str;
    };
    $scope.buycard = function() {
        $.ajax({
            url: baseUrl + '/buycard/get-produrt',
            method: 'GET',
            data: {
                scratchCardNameId: $scope.scratchCardNameId,
                scratchCardType: $scope.scratchCardType
            },
            success: function(resp) {
                loading.hide();
                if (resp.success) {
                    $scope.$apply(function() {
                        $scope.data = resp.data;
                    });
                }
            }
        });
    }
    $scope.checkAvailable = function() {
        $.ajax({
            url: baseUrl + '/product/check-available?id=' + $scope.variation.id,
            method: 'GET',
            success: function(resp) {
                if (resp && resp.success) {
                    $scope.$apply(function() {
                        $scope.available = true;
                        $scope.properties = resp.properties;
                        receiver = resp.receiver;
                    });
                }

                // flash-sale
                if (resp && typeof(resp.data) !== 'undefined' && typeof(resp.data.onSale) !== 'undefined') {
                    $scope.$apply(function() {
                        $scope.onSale = resp.data.onSale;
                    });
                }

                // buy together checkBuyTogetherFirst
                if (resp && typeof(resp.data) !== 'undefined' && typeof(resp.data.buyTogetherData) !== 'undefined') {
                    $scope.$apply(function() {
                        $scope.buyTogetherData = resp.data.buyTogetherData;
                    });
                }

                var arrTimeLandingPage = $('.b__flash--countdown');
                if (arrTimeLandingPage) {
                    var countDownDatesLandingPage = [];
                    for (iLandingPage = 0; iLandingPage < arrTimeLandingPage.length; iLandingPage++) {
                        countDownDatesLandingPage[iLandingPage] = new Date(arrTimeLandingPage[iLandingPage].innerText).getTime();
                    }

                    var xLandingPage = setInterval(function() {
                        var nowLandingPage = new Date().getTime();
                        for (iLandingPage = 0; iLandingPage < arrTimeLandingPage.length; iLandingPage++) {
                            var distanceLandingPage = countDownDatesLandingPage[iLandingPage] - nowLandingPage;
                            var daysLandingPage = Math.floor(distanceLandingPage / (1000 * 60 * 60 * 24));
                            var hoursLandingPage = Math.floor((distanceLandingPage % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                            var minutesLandingPage = Math.floor((distanceLandingPage % (1000 * 60 * 60)) / (1000 * 60));
                            var secondsLandingPage = Math.floor((distanceLandingPage % (1000 * 60)) / 1000);
                            if ((daysLandingPage + hoursLandingPage + minutesLandingPage + secondsLandingPage) <= 0) {
                                clearInterval(xLandingPage);
                                break;
                            }
                            // <span class="day">'+daysLandingPage+'</span>
                            var elLandingPage = arrTimeLandingPage[iLandingPage];
                            $(elLandingPage).html('<span class="hour bg_number">' + hoursLandingPage + '</span><label class="two-dot">:</label><span class="minute bg_number">' + minutesLandingPage + '</span><label class="two-dot">:</label><span class="second bg_number">' + secondsLandingPage + '</span>');
                        }
                        // $('.countdown-landing-page').show();
                    }, 1000);
                }
            },
            complete: function() {
                loading.hide();
                // scroll đến phần Hướng dẫn sử dụng
                if (initialViewSection && initialViewSection === 'user-manual') {
                    const userManualElement = document.getElementById('user_manual_section');
                    if (userManualElement) {
                        userManualElement.scrollIntoView(true);
                    }
                }
            }
        });
    };

    $scope.changeProperty = function(productId, image, price, k) {
        $scope.product.id = productId;
        $scope.product.image = image;
        $scope.product.price = price;
        $scope.bProperty[k].productId = productId;
    };

    $scope.init = function() {
        $scope.descriptionDetail = $sce.trustAsHtml($scope.convertTAYouTubeMarkupToIframe(product.description));
        $scope.checkAvailable();
    };

    $scope.changeNumberQuantity = function() {
        var num = $scope.quantity;
        if (num == '' || isNaN(num) || num < 1) {
            $scope.quantity = 1;
        }
    };

    $scope.checkUser = function() {
        $.ajax({
            url: baseUrl + '/auth/check',
            method: 'GET',
            success: function(resp) {
                if (resp.success) {
                    $scope.$apply(function() {
                        $('.total-item-in-cart').html(resp.data.totalProduct);
                    });
                } else {
                    $scope.$apply(function() {
                        $('.total-item-in-cart').html(resp.data.totalProduct);
                    });
                }
            }
        });
    };

    $scope.addcart = function(animateIconFrom, animateIconTo) {
        selected = true;
        $.each($('select[property]'), function(i, v) {
            if ($(v).val() == '0') {
                selected = false;
            }
        });
        // var product_addToCart = {
        //     'name': $scope.item.name,
        //     'id': $scope.item.id,
        //     'price': $scope.item.price,
        //     'category': $('ol li:nth-last-child(2)').text().trim(),
        //     'position': 1
        // };
        // dataLayer.push({
        //     'event': 'clickAddToCart',
        //     'product_addToCart_data': product_addToCart
        // });
        if (!selected) {
            modal.alert('Vui lòng chọn thuộc tính sản phẩm');
            return;
        }
        loading.show();
        $.ajax({
            url: baseUrl + '/cart/add-v2',
            data: { pid: $scope.variation.id, quantity: $scope.quantity, affiliateId: affiliateId },
            method: 'GET',
            success: function(resp) {
                loading.hide();
                if (resp.success) {

                    var btnaddcart = $('#' + animateIconFrom);
                    var cart = $('#' + animateIconTo);
                    var imgtodrag = $('#myCloudZoom');
                    if (imgtodrag) {
                        var imgclone = imgtodrag.clone()
                            .offset({
                                top: btnaddcart.offset().top,
                                left: btnaddcart.offset().left
                            })
                            .css({
                                'opacity': '0.7',
                                'position': 'absolute',
                                'height': '150px',
                                'width': '150px',
                                'z-index': '100'
                            })
                            .appendTo($('body'))
                            .animate({
                                'top': cart.offset().top + 10,
                                'left': cart.offset().left + 10,
                                'width': 75,
                                'height': 75
                            }, 1000, 'easeInOutExpo')

                        // setTimeout(function () {
                        // cart.effect("shake", {
                        //     times: 2
                        // }, 200);
                        // }, 1500);

                        imgclone.animate({
                            'width': 0,
                            'height': 0
                        }, function() {
                            // // btnaddcart.detach()
                        });
                    }
                    order.cartModal(resp.data, buyer, 1, 0);
                    $scope.checkUser();
                } else {
                    modal.alert(resp.message);
                }
            }
        });
    };

    $scope.buy = function() {
        selected = true;
        $.each($('select[property]'), function(i, v) {
            if ($(v).val() == '0') {
                selected = false;
            }
        });
        // var product_addToCart = {
        //     'name': $scope.item.name,
        //     'id': $scope.item.id,
        //     'price': $scope.item.price,
        //     'category': $('ol li:nth-last-child(2)').text().trim(),
        //     'position': 1
        // };
        // dataLayer.push({
        //     'event': 'clickAddToCart',
        //     'product_addToCart_data': product_addToCart
        // });
        if (!selected) {
            modal.alert('Vui lòng chọn thuộc tính sản phẩm');
            return;
        }
        loading.show();
        $.ajax({
            url: baseUrl + '/cart/add-v2',
            data: {
                pid: $scope.variation.id,
                quantity: $scope.quantity,
                affiliateId: affiliateId,
                btgFirst: $scope.checkBuyTogetherFirst,
            },
            method: 'GET',
            success: function(resp) {
                loading.hide();
                if (resp.success) {
                    location.href = baseUrl + "/gio-hang";
                    order.cartModal(resp.data, buyer, 1, 0);
                    $rootScope.$emit("CallGetPackageMethod", {});
                } else {
                    modal.alert(resp.message);
                }
            }
        });
    };


    $scope.buymb = function() {
        selected = true;
        $.each($('select[property]'), function(i, v) {
            if ($(v).val() == '0') {
                selected = false;
            }
        });
        // var product_addToCart = {
        //     'name': $scope.item.name ,
        //     'id':  $scope.item.id,
        //     'price': $scope.item.price,
        //     'category':  $('ol li:nth-last-child(2)').text().trim(),
        //     'position': 1
        // };
        // dataLayer.push({
        //     'event': 'clickAddToCart',
        //     'product_addToCart_data': product_addToCart
        // });
        if (!selected) {
            modal.alert('Vui lòng chọn thuộc tính sản phẩm');
            return;
        }
        loading.show();
        $.ajax({
            url: baseUrl + '/cart/add-v2',
            data: {
                pid: $scope.variation.id,
                quantity: $scope.quantity,
                affiliateId: affiliateId,
                btgFirst: $scope.checkBuyTogetherFirst,
            },
            method: 'GET',
            success: function(resp) {
                loading.hide();
                if (resp.success) {
                    location.href = baseUrl + "/cart/mobile";
                    order.cartModal(resp.data, buyer, 1, 0);
                    $rootScope.$emit("CallGetPackageMethod", {});
                } else {
                    modal.alert(resp.message);
                }
            }
        });
    };

    $scope.chat = function(mmId) {
        // bootbox.alert('Vui lòng đăng nhập để chat');
        console.log(123);
        $uibModal.open({
            animation: true,
            templateUrl: 'chatboxTemplate',
            controller: 'chatCtrl',
            windowClass: 'modal-default',
            backdrop: 'static',
            resolve: {
                params: function() {
                    return {
                        receiverId: mmId
                    }
                }
            }
        });
    };

    $scope.addlike = function() {
        loading.show();
        $.ajax({
            url: '/product/add-like',
            data: { piid: $scope.item.id },
            method: 'GET',
            success: function(resp) {
                loading.hide();
                if (resp.success) {
                    $scope.likeCount = resp.data;
                    $scope.status = resp.class;
                    modal.alert(resp.message);
                } else {
                    modal.alert(resp.message);
                }
            }
        });
    };


    $scope.pageRate = 0;
    $scope.countRatePage = 0;
    $scope.rateProduct = 0;
    $scope.countRate = {};
    $scope.rateTotal = {
        total: 0

    };

    $scope.rates = [];
    $scope.getRate = function(rate) {
        loading.show();
        $.ajax({
            url: '/product/get-rate',
            data: {
                rate: rate,
                productId: product.id,
                page: $scope.pageRate,
            },
            method: 'GET',
            success: function(resp) {
                loading.hide();
                if (resp.success) {
                    $scope.$apply(function() {
                        $scope.rates = resp.data.rates;
                        $scope.rateProduct = resp.data.rateProduct;
                        $scope.rateTotal.total = resp.data.rateProduct;
                        $scope.pageRate = resp.data.page;
                        $scope.countRate = resp.data.counts;
                        $scope.countRatePage = resp.data.pageCount;
                    });
                }
            }
        });
    };
    $scope.getRate(0);

    $scope.rating = function(r) {
        if (typeof(r) === 'undefined' || !r || r == 0) {
            var ratingsdbbsdjvbsdjbvsdi8 = 0;
        } else {
            var ratingsdbbsdjvbsdjbvsdi8 = (r * 1 / 5) * 100;
        }
        var htmldhwerhwewhwese = '<div class="jstars-empty" style="position: relative;display: inline-block;font-size: 1.5rem;line-height: 1.5rem;color: #dddddd;user-select: none;">' +
            repeat("<i class=\"fa fa-star\"></i>", 5) +
            '<div class="jstars-filled" style="' +
            'width: ' + ratingsdbbsdjvbsdjbvsdi8 + '%;' +
            'top: 0;left: 0;position: absolute;display: inline-block;font-size: 1.5rem;line-height: 1.5rem;overflow: hidden;white-space: nowrap;color: #4285F4;user-select: none;">' +
            repeat("<i class=\"fa fa-star\"></i>", 5) +
            '</div></div>';
        return $sce.trustAsHtml(htmldhwerhwewhwese);
    }

    $scope.thumb = function(image) {
        if (image) {
            var imageUrl = imboClient.getImageUrl(image);
            return imageUrl.maxSize({
                width: 256,
                height: 256
            }).compress({ level: 100 }).toString();
        }
    };

    $scope.hasFlashSale = function() {
        if (!$scope.checkBuyTogetherFirst || !$scope.buyTogetherData) {
            return $scope.onSale ? true : false;
        }
        return false;
    }

    $scope.hasBuyTogether = function() {
        if ($scope.checkBuyTogetherFirst || !$scope.onSale) {
            return $scope.buyTogetherData ? true : false;
        }
        return false;
    }

    $scope.getOriginalPrice = function() {
        if ($scope.hasBuyTogether() && ($scope.checkBuyTogetherFirst || !$scope.hasFlashSale())) {
            return $scope.btg_getOriginalPrice();
        } else {
            if ($scope.variation.listPrice && $scope.variation.listPrice > $scope.variation.price) {
                return $scope.variation.listPrice;
            }
            return $scope.variation.price;
        }
    }

    $scope.getSalePrice = function() {
        if ($scope.hasBuyTogether() && ($scope.checkBuyTogetherFirst || !$scope.hasFlashSale())) {
            return $scope.btg_getSalePrice();
        } else {
            return $scope.onSale ? $scope.onSale.salePrice : $scope.variation.price;
        }
    }

    $scope.calculateSalePercent = function() {
        if ($scope.hasBuyTogether() && ($scope.checkBuyTogetherFirst || !$scope.hasFlashSale())) {
            return $scope.btg_getSalePercent();
        }

        var salePercent = 0;
        if ($scope.variation.listPrice && $scope.variation.listPrice > $scope.variation.price) {
            salePercent = 100 - $scope.variation.price / $scope.variation.listPrice * 100;
            if ($scope.onSale) {
                salePercent = 100 - $scope.onSale.salePrice / $scope.variation.listPrice * 100;
            }
        } else if ($scope.onSale) {
            salePercent = 100 - $scope.onSale.salePrice / $scope.variation.price * 100;
        }
        // return utils.roundToTwo(salePercent);
        if (salePercent < 1) {
            return Math.ceil(salePercent);
        }
        return Math.floor(salePercent);
    }

    $scope.btg_getOriginalPrice = function() {
        const data = $scope.buyTogetherData;
        if (data.productListPrice && parseInt(data.productListPrice) > parseInt(data.productPrice)) {
            return parseInt(data.productListPrice);
        }
        return parseInt(data.productPrice);
    }

    $scope.btg_getSalePrice = function() {
        const data = $scope.buyTogetherData;
        var discountObj = null;
        if (data.discounts) {
            for (var i = data.discounts.length - 1; i >= 0; i--) {
                if (parseInt(data.discounts[i].fromBuyCount) <= parseInt(data.buyCount) + 1) {
                    discountObj = data.discounts[i];
                    break;
                }
            }
        }

        if (discountObj) {
            return parseInt(discountObj.discountValue);
        } else {
            return parseInt(data.productPrice);
        }
    }

    $scope.btg_getSalePercent = function() {
        const data = $scope.buyTogetherData;
        var discountObj = null;
        if (data.discounts) {
            for (var i = data.discounts.length - 1; i >= 0; i--) {
                if (parseInt(data.discounts[i].fromBuyCount) <= parseInt(data.buyCount) + 1) {
                    discountObj = data.discounts[i];
                    break;
                }
            }
        }

        if (discountObj) {
            return Math.floor(parseFloat(discountObj.discountPercent));
        } else {
            var price = $scope.btg_getOriginalPrice();
            var percent = utils.roundToTwo((price - parseInt(data.productPrice)) / price * 100);
            return Math.max(Math.floor(percent), 0);
        }
    }

    $scope.recommendation = function() {
        loading.show();
        $.ajax({
            url: '/product/recommendation',
            data: { productId: $scope.item.id },
            method: 'GET',
            success: function(resp) {
                loading.hide();
            }
        });
    }

    $scope.recommendation();

});

app.controller('productBH', function($scope, $rootScope, $uibModal, modal) {
    $scope.categoryId = categoryId;
    $scope.categoryIds = categoryIds;
    $scope.categoryBHS = [{ 'id': 0, 'name': 'Tất cả' }];
    $scope.changeCategoryId = function() {
        $scope.categoryIds = 0;
        loading.show();
        $.ajax({
            url: '/product/getcategory',
            data: { id: $scope.categoryId, consumerCategory: 0 },
            method: 'GET',
            success: function(resp) {
                loading.hide();
                if (resp.success) {
                    $scope.$apply(function() {
                        $scope.categoryBHS = [{ 'id': 0, 'name': 'Tất cả' }].concat(resp.data);
                    });
                }
            }
        });
    }

    $scope.getCategoryid = function() {
        loading.show();
        $.ajax({
            url: baseUrl + '/product/getcategory',
            method: 'GET',
            success: function(resp) {
                loading.hide();
                if (resp.success) {
                    $scope.$apply(function() {
                        $scope.consumerCategory = [{ 'id': 0, 'name': 'Tất cả' }].concat(resp.data);
                    });
                }
            }
        });
        if ($scope.categoryId > 0) {
            $.ajax({
                url: '/product/getcategory',
                data: { id: $scope.categoryId, consumerCategory: 0 },
                method: 'GET',
                success: function(resp) {
                    loading.hide();
                    if (resp.success) {
                        $scope.$apply(function() {
                            $scope.categoryBHS = [{ 'id': 0, 'name': 'Tất cả' }].concat(resp.data);
                        });
                    }
                }
            });
        }
    };
    $scope.getCategoryid();

});




app.controller('commentProductModal', function($scope, $uibModalInstance, params, auth, modal, $sce) {

    $scope.name = '';
    $scope.rate = '';
    $scope.content = '';

    $scope.ok = function() {
        loading.show();
        $.ajax({
            url: baseUrl + '/product/comment',
            data: {
                id: params.id,
                oid: params.oid,
                mid: params.mid,
                name: $scope.name,
                content: $scope.content,
                rate: $scope.rate,
            },
            method: 'POST',
            success: function(resp) {
                if (resp.success) {
                    $scope.$apply(function() {
                        $scope.cancel();
                        modal.alert(resp.message);
                    });
                } else {
                    $scope.$apply(function() {
                        $scope.errors = resp.data;
                    });
                }
                loading.hide();
            }
        });
    }

    $scope.cancel = function() {
        $uibModalInstance.dismiss('cancel');
    };
});

$(document).ready(function() {
    $('.filter-province').select2({
        placeholder: "Chọn tỉnh thành",
        allowClear: true,
        width: '100%',
    });

    $('.custom-control-input').click(function() {
        var url = $(this).attr('url');
        if (url) {
            location.href = $(this).attr('url');
        }
    });
});

// function searchProvince(e){
//     if($(e).val()){
//         location.href = $('.filter-province option[value='+$(e).val()+']').attr('url');
//     }
//     else
//         location.href = urlWithoutProvince; 
// }

// function searchProvince(e){
//     console.log(this.value);
//     if($(e).val()){
// location.href = $('.filter-province option[value='+$(e).val()+']').attr('url');
// location.href = $('.filter-province option[value='+$(e).val()+']').attr('url');
// }
// else
// location.href = urlWithoutProvince; 
// }