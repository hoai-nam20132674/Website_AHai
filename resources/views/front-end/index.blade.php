@extends('front-end.layout.default')
@section('head')
	

	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="theme-color" content="#0871ce">
	    <meta http-equiv="content-language" content="vi" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	    <meta name="author" content="Template" />
	    <meta name='COPYRIGHT' content='&copy; Template' />
	    <meta name="robots" content="noodp,index,follow" />
	    <meta name="google" content="notranslate" />
	    <meta name="keywords" content="" />
	    <meta name="description" content="" />
	    <meta property="og:type" content="website" />
	    <meta name="apple-itunes-app" content="app-id=1504041888">
	    <meta name="google-play-app" content="app-id=vn.voso.buyer">
	    <meta property="og:description" content="Sàn thương mại điện tử của khách hàng Viettelpost" />
        <meta property="og:url" content="https://voso.vn" />
        <meta property="og:image" content="http://voso.vn/static/images/logo/avatar_voso.png" /><meta property="og:locale" content="vi_VN" />
        <link rel="canonical" href="" /> 
        
	    <title>Sàn thương mại điện tử của khách hàng Viettelpost</title>

	    <link href="css/bootstrap.css?v=1568371445" rel="stylesheet">
	    <link href="css/font-awesome.min.css?v=1566957476" rel="stylesheet">
	    <link href="css/bootstrap.min.css?v=1603338119" rel="stylesheet">
	    <link href="css/owl.carousel.min.css?v=1603338119" rel="stylesheet">
	    <link href="css/toastr.min.css?v=1603338119" rel="stylesheet">
	    <link href="css/fontawesome.css?v=1603338119" rel="stylesheet">
	    <link href="css/stylev2.css?v=1614350823" rel="stylesheet">
	    <link href="css/all.css?v=1603338119" rel="stylesheet">
	    <link href="css/chat.css?v=1603338119" rel="stylesheet">
	    <link href="css/style.css?v=1610977888" rel="stylesheet">
	    <link href="css/custom.css?v=1614350823" rel="stylesheet"> 
	    <style>
	        .f-items_show-fullname .f-items_name{
	            overflow: hidden;
	            text-overflow: ellipsis;
	            display: -webkit-box;
	            -webkit-line-clamp: 2;
	            -webkit-box-orient: vertical;
	        }
	        .f-items_show-fullname .f-items_name:hover{
	            -webkit-line-clamp: inherit;
	            text-align: justify;
	        }
	        .b__price .ml-auto {
	            line-height: 1.8em;
	        }
	        @media (min-width: 992px){
	            .f-items .f-items__ls {
	                display: flex;
	                height: inherit;
	                justify-content: space-between;
	                align-items: center;
	                min-height: 25px;
	            }
	        }
	        .modal.fade .modal-dialog{
	            transform: unset;
	        }

	        [id|=textAngular-editableFix]{
	            display: none !important;
	        }
	    </style>
	    <style>
		    .b__flashsale-cloned {
		        display: none;
		    }


		    .b__box--title {
		        display: flex !important;
		        align-items: center;
		        justify-content: center;
		        margin-bottom: 5px;

		    }

		    .b__box-title {
		        flex: 1;
		        flex-basis: 66%;
		        max-width: 66%;
		    }

		    .b__box_h3 {
		        font-size: 22px;
		        margin: 0;
		        font-weight: 300;
		    }

		    .url-all {
		        flex: 1;
		        text-align: right;
		        align-items: center;
		        justify-content: center;
		        padding-right: 15px;
		    }

		    .b__vosoMall .b__box--title .url-all a.ml-auto {
		        position: inherit;
		    }

		    @media (max-width: 767px) {
		        .b__search--box {
		            width: 100%;
		        }

		        .navbar-generic__back {
		            display: none;
		        }
		    }

		    @media (max-width: 575px) {
		        .b__box_h3 {
		            font-size: 15px;
		            font-weight: 500;
		        }
		    }

		    @media (max-width: 767px) {
		        .icon-cart-mb {
		            position: relative;
		        }

		        .tabbar {
		            display: block;
		        }

		        .h2-tabbar {
		            display: -webkit-box;
		            display: -webkit-flex;
		            display: -ms-flexbox;
		            display: flex;
		            height: 48px;
		            position: fixed;
		            bottom: 0;
		            left: 0;
		            right: 0;
		            z-index: 1000;
		            box-shadow: 0 -1px 1px 0 rgba(0, 0, 0, .15);
		            background-color: #fff;
		            box-sizing: border-box;
		        }

		        .h2-tabbar .svg-icon {
		            vertical-align: middle;
		            overflow: hidden;
		            margin: 0 auto;
		        }

		        .h2-tabbar .svg-icon a:focus {
		            text-decoration: unset;
		        }

		        .h2-tabbar .svg-icon svg {
		            color: #0871ce;
		            font-size: 14px;
		            width: 20px;
		            vertical-align: middle;
		            overflow: hidden;
		            margin: 0 auto;
		        }

		        .h2-tabbar .svg-icon img {
		            height: 100%;
		            width: 100%;
		        }

		        .h2-tabbar .item {
		            width: 100%;
		            text-align: center;
		            padding-top: 5px;
		        }

		        .h2-tabbar .item p {
		            font-size: 10px;
		            color: #8C8C8C;
		        }
		        
		        .tabbar .svg-icon .fas {
		            color: #8C8C8C;
		            font-size: 13px;
		        }

		        .acount-member ul li {
		            border-bottom: 0;
		        }
		        .section-category-list {
		            display: none;
		        }
		    }
		</style>


	<!--[if lt IE 9]>
	        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	    <![endif]-->
	    <script>
	        var user;
	    </script>
	    <style>
	        [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
	            display: none !important;
	        }
	    </style>
	
@endsection

@section('content')
<div ng-controller="popup">
    <div ng-if="data && canDisplay" ng-class="isFull ? 'popup' : ''">
        <div ng-class="isFull ? 'popup-overlay' : ''" ng-click="thumb()"></div>
        <div ng-class="isFull ? 'popup-center' : 'popup-corner'">
            <div class="popup-close" ng-click="isFull ? thumb() : close()">
                <i class="fas fa-times"></i>
            </div>
            <div class="popup-image" ng-click="clickPopup()">
                <img />
            </div>
        </div>
    </div>
</div>
<div class="header-mobile-show">
    <div class="b__banner--pc">
        <div class="container">
            <div class="b__banner--pc_info stretch">
                <div class="b__sldier--left b__slider--ls">
                    <div id="imgSlide" class="owl-carousel">
                        
                        <div class="b__img">
                            <a class="banner-img progressive replace" data-href="https://media3.scdn.vn/img4/2021/01_15/GyPhS3LugjsSHkgT1tjb.png">
                                <img class="preview" src="https://media3.scdn.vn/img4/2021/01_15/GyPhS3LugjsSHkgT1tjb.png" />
                            </a>
                        </div>
                        <div class="b__img">
                            <a class="banner-img progressive replace" data-href="https://media3.scdn.vn/img4/2021/03_01/gWx8HOQuCnC2sPkxeLHk.png">
                                <img class="preview" src="https://media3.scdn.vn/img4/2021/03_01/gWx8HOQuCnC2sPkxeLHk.png" />
                            </a>
                        </div>
                        <div class="b__img">
                            <a class="banner-img progressive replace" data-href="https://media3.scdn.vn/img4/2021/03_01/uFa7gNSFnX7Ix40bBKRH.png">
                                <img class="preview" src="https://media3.scdn.vn/img4/2021/03_01/uFa7gNSFnX7Ix40bBKRH.png" />
                            </a>
                        </div>
                        
                    </div>
                </div>
                <div class="b__banner--right b__slider--ls">
                    <div class="b__banner--top">
                        <a class="progressive replace" data-href="https://media3.scdn.vn/img4/2021/03_01/uFa7gNSFnX7Ix40bBKRH.png" href="https://voso.vn/dac-san-vo-so-s3145375">
                            <img class="preview" src="https://media3.scdn.vn/img4/2021/03_01/uFa7gNSFnX7Ix40bBKRH.png" width="100%" />
                        </a>
                    </div>
                    <div class="b__banner--top">
                        <a class="progressive replace" data-href="https://media3.scdn.vn/img4/2021/03_01/gWx8HOQuCnC2sPkxeLHk.png" href="https://voso.vn/ocop">
                            <img class="preview" src="https://media3.scdn.vn/img4/2021/03_01/gWx8HOQuCnC2sPkxeLHk.png" width="100%" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> <style>
        .section-category-list .b__box--title {
            padding: 10px ;
            background-color: #ffffff;
            margin-bottom: 0;
            border-bottom: 1px solid rgba(0,0,0,.05);
        }
        .section-category-list .m-items a:hover {
            text-decoration: unset;
            color: #0a0a0a;
        }
        .section-category-list .m-items a {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 123px;
            border-right: 1px solid rgba(0,0,0,.05);
            border-bottom: 1px solid rgba(0,0,0,.05);
        }

        .section-category-list .owl-item:last-child .m-items a{
            border-right: none;
        }
        .grid-list-wrapper{
            background-color: #ffffff;
        }

        .category-thumbnail {
            width: 80px;
            margin: 0 auto;
        }
        .category-name {
            text-align: center;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
            display: -webkit-box;
            font-size: 13px;
        }
        
        .section-category-list {
            margin: 15px 0 20px 0;
        }
        .section-category-list .m-items a:hover {
            box-shadow: 0 2px 4px 0 rgba(0,0,0,.25);
            position: relative;
        }
        @media (max-width: 767px) {
            .section-category-list {
                margin: 0px 0 10px 0;
            }
            .category-thumbnail {
                width: 55px;
            }
            .grid-list-wrapper .owl-dots{
                display: none;
            }
            .section-category-list .m-items a {
                border-right: none;
                border-bottom: none;
                min-height: 100px;
            }
            .section-category-list .b__box--title {
                border-bottom: none;
            }
            .section-category-list .m-items a:hover {
                box-shadow: none !important;
            }
        }
    </style>
    <div class="section-category-list">
        <div class="container contaiver-v2">
            <div class="b__box--title">

                <div class="b__box-title">
                    <h3 class="b__box_h3">DANH MỤC</h3>
                </div>
                <div class="url-all">
                </div>
            </div>
            <div class="grid-list-wrapper">
                <div id="slideListCategory" class="owl-carousel">
                    <div class="m-items">
                        <a href="https://voso.vn/san-dac-san-c137">
                            <div class="list-category">
                                <div class="category-thumbnail progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/fc85c31734052bd9140f541064710740?t%5B0%5D=compress%3Alevel%3D100&accessToken=c8e8f1f3ae5a7836091e9418f98aeb95cf6e778f78a27748ae08bdca862ba333">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" />
                                </div>
                                <div class="category-name">
                                Sàn đặc sản </div>
                            </div>
                        </a>
                        <a href="https://voso.vn/bach-hoa-c84">
                            <div class="list-category">
                                <div class="category-thumbnail progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/33e8a70ab47dd54767126854cb3ae7a1?t%5B0%5D=compress%3Alevel%3D100&accessToken=4e7d57de88cb5973bd0ba0381b8785ccb6521d590570c66b0ce14cb42563236e">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" />
                                    <div class="category-name">
                                    Bách hóa </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="m-items">
                        <a href="https://voso.vn/thiet-bi-dien-tu-c27">
                            <div class="list-category">
                                <div class="category-thumbnail progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/932508c911bc651459590e2e83af9b02?t%5B0%5D=compress%3Alevel%3D100&accessToken=0901cb7c5d2fba14ece544f1fdf11ae9354ea50fc7d22175f6409c64dda69ebf">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" />
                                </div>
                                <div class="category-name">
                                Thiết bị điện tử </div>
                            </div>
                        </a>
                        <a href="https://voso.vn/me-be-c74">
                            <div class="list-category">
                                <div class="category-thumbnail progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/0f45ef739107cfa63de9a2dd02dc5527?t%5B0%5D=compress%3Alevel%3D100&accessToken=673ed82cbb3011f69ba4f993837c23c3808f8fb72f9707e752ba0bf17bb8284e">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" />
                                    <div class="category-name">
                                    Mẹ & Bé </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="m-items">
                        <a href="https://voso.vn/suc-khoe-lam-dep-c63">
                            <div class="list-category">
                                <div class="category-thumbnail progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/110ca606f0903891346e592b072a09c4?t%5B0%5D=compress%3Alevel%3D100&accessToken=67894e36bc5aa0ef055a422a4a2fee800e65bcd04c161cbbaa17c0710c5bcbcf">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" />
                                </div>
                                <div class="category-name">
                                Sức khỏe - Làm đẹp  </div>
                            </div>
                        </a>
                        <a href="https://voso.vn/dien-gia-dung-c53">
                            <div class="list-category">
                                <div class="category-thumbnail progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/2a6ef4b499e9057bc1489d426b720548?t%5B0%5D=compress%3Alevel%3D100&accessToken=50027de918f3fc72acdb075d34ed0b75f723cc5d33c811f061a38c02840d6443">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" />
                                    <div class="category-name">
                                    Điện gia dụng </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="m-items">
                        <a href="https://voso.vn/phu-kien-thiet-bi-so-c41">
                            <div class="list-category">
                                <div class="category-thumbnail progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/78ba3f91eeb1229c5d811182a9c164d7?t%5B0%5D=compress%3Alevel%3D100&accessToken=a6b323ab30a0ab6d807c07a88cf1edc93b0f62017b4a53a6e2b9c34f265ad4bc">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" />
                                </div>
                                <div class="category-name">
                                Phụ kiện thiết bị số </div>
                            </div>
                        </a>
                        <a href="https://voso.vn/thoi-trang-nam-c94">
                            <div class="list-category">
                                <div class="category-thumbnail progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/dde4ce41ee3a5224caced97ccca24902?t%5B0%5D=compress%3Alevel%3D100&accessToken=b5d5b06e793451a3d8f0cb2b972c1ffa9670c87f83d77158e0c2c177ebd0a177">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" />
                                    <div class="category-name">
                                    Thời trang Nam </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="m-items">
                        <a href="https://voso.vn/thoi-trang-nu-c104">
                            <div class="list-category">
                                <div class="category-thumbnail progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/3d3743289b5725a8873860dc222d1471?t%5B0%5D=compress%3Alevel%3D100&accessToken=b38f78e72ee399fd6ec246d90b164c887d281ffb19dce4a8505f176885965d67">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" />
                                </div>
                                <div class="category-name">
                                Thời trang Nữ </div>
                            </div>
                        </a>
                        <a href="https://voso.vn/the-thao-du-lich-c114">
                            <div class="list-category">
                                <div class="category-thumbnail progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/f97f18483dc50aebe32ce3c86aff83d4?t%5B0%5D=compress%3Alevel%3D100&accessToken=e6701774ab63d2f3f841bac9db04dbb687fc1e8b9b939a76666a93c7f8f4c907">
                                   <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" />
                                   <div class="category-name">
                                   Thể thao - Du lịch </div>
                               </div>
                           </div>
                       </a>
                   </div>
                   <div class="m-items">
                    <a href="https://voso.vn/oto-xe-may-c122">
                        <div class="list-category">
                            <div class="category-thumbnail progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/fcec0091b0dbdb4fab64e68f58d3006f?t%5B0%5D=compress%3Alevel%3D100&accessToken=57dfea498cfc8dcf2ca7aac45cc8b1bed780f5aba80b26686d86ce912e88d1f2">
                                <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" />
                            </div>
                            <div class="category-name">
                            Ôtô - Xe máy </div>
                        </div>
                    </a>
                    <a href="https://voso.vn/hang-nhap-khau-c130">
                        <div class="list-category">
                            <div class="category-thumbnail progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/8db6f2b0bd59b452112513f88f4bec90?t%5B0%5D=compress%3Alevel%3D100&accessToken=5edce3ade469e38240e7e04091d215824e0a619102534ce75057a6f3099216cc">
                                <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" />
                                <div class="category-name">
                                Hàng nhập khẩu </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="m-items">
                    <a href="https://voso.vn/thu-cong-my-nghe-c143">
                        <div class="list-category">
                            <div class="category-thumbnail progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/ee8cac19e26a23ab6eafffaac14bedfc?t%5B0%5D=compress%3Alevel%3D100&accessToken=cbec9ee146f6a33f5d3124ad1c0d050e9f76bb79ad214beba6f6a79f36135a57">
                                <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" />
                            </div>
                            <div class="category-name">
                            Thủ công mỹ nghệ </div>
                        </div>
                    </a>
                    <a href="https://voso.vn/co-khi-xay-dung-c153">
                        <div class="list-category">
                            <div class="category-thumbnail progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/6aedb1ea27cd5aef06aa18cb4565135b?t%5B0%5D=compress%3Alevel%3D100&accessToken=0acc65a9205e5de72d5ce7b8d0e5f24239a57cf68b8a34fbff17f294225e3532">
                                <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" />
                                <div class="category-name">
                                Cơ khí - Xây dựng </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="m-items">
                    <a href="https://voso.vn/voucher-dich-vu-c167">
                        <div class="list-category">
                            <div class="category-thumbnail progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/0843ea11773508c2cfd78a0b24e9f4e1?t%5B0%5D=compress%3Alevel%3D100&accessToken=0b1ec5e80cd50455a6cdd888b4c4b923cf68f480d6787099accab03998d0d780">
                                <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" />
                            </div>
                            <div class="category-name">
                            Voucher - Dịch vụ </div>
                        </div>
                    </a>
                    <a href="https://voso.vn/vat-lieu-xay-dung-c199">
                        <div class="list-category">
                            <div class="category-thumbnail progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/abc7e458e643eefe725ae7ec833ba932?t%5B0%5D=compress%3Alevel%3D100&accessToken=081507d8cfbb5663ba8f715a510f3fb582aa8ee733a326b6ff6cf80fd6122e8a">
                                <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" />
                                <div class="category-name">
                                Vật liệu xây dựng </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="b__icon--gr" style="padding: 5px 0; margin-bottom: 10px">
    <div class="container contaiver-v2">
        <div class="title" style="text-align: left !important;padding-left: 10px;">

            <h3 class="b__box_h3" style="padding: 5px 0 20px 0;font-weight: 500; color: #0871ce">Dịch vụ tiện ích</h3>
        </div>
        <div class="b__icon--gr_info">
            <ul>
                <li>
                    <a href="https://voso.vn/mall">
                        <div class="b__img--thumbs">
                            <img src="https://image.voso.vn/users/vosoimage/images/955ea586c860629e7933edfc0e616255?t%5B0%5D=maxSize%3Awidth%3D100%2Cheight%3D100&t%5B1%5D=compress%3Alevel%3D100&accessToken=fb81e6035d4c5039f6cdb1e6a3c75d63217c734596136c5e40c8e59172a09bca" onerror="this.src='/static/v2/images/logo.png'" />
                        </div>
                        <span>Voso Mall</span>
                    </a>
                </li>
                <li>
                    <a href="https://voso.vn/san-dac-san-c137">
                        <div class="b__img--thumbs">
                            <img src="https://image.voso.vn/users/vosoimage/images/26c1fe772461478b1fe158d31acb07bd?t%5B0%5D=maxSize%3Awidth%3D100%2Cheight%3D100&t%5B1%5D=compress%3Alevel%3D100&accessToken=2af281fbe66415a19ae249fd96b198d68e14842cf3c6a30f2e5d7dee16253677" onerror="this.src='/static/v2/images/logo.png'" />
                        </div>
                        <span>Đặc sản</span>
                    </a>
                </li>
                <li>
                    <a href="https://voso.vn/ocop">
                        <div class="b__img--thumbs">
                            <img src="https://image.voso.vn/users/vosoimage/images/cb3a8f77d4b08e49ab17ae2ebbb272c3?t%5B0%5D=maxSize%3Awidth%3D100%2Cheight%3D100&t%5B1%5D=compress%3Alevel%3D100&accessToken=0e4f65b58c5f76e6ecc1535986b2f3d7d511512eb5a72fee25c81cb35c0743c3" onerror="this.src='/static/v2/images/logo.png'" />
                        </div>
                        <span>Gian hàng OCOP</span>
                    </a>
                </li>
                <li>
                    <a href="https://vtbay.com.vn/">
                        <div class="b__img--thumbs">
                            <img src="https://image.voso.vn/users/vosoimage/images/8fe1097cdeb2fa96bafc10aa70ddda11?t%5B0%5D=maxSize%3Awidth%3D100%2Cheight%3D100&t%5B1%5D=compress%3Alevel%3D100&accessToken=fd320de24d51650d0dc1364cf3b931e2e49e8182e5dbdc67b2b34512fa6651e3" onerror="this.src='/static/v2/images/logo.png'" />
                        </div>
                        <span>Máy bay</span>
                    </a>
                </li>
                <li>
                    <a href="https://voso.vn/bach-hoa-online.html">
                        <div class="b__img--thumbs">
                            <img src="https://image.voso.vn/users/vosoimage/images/d859190c2e863e40cb8df5455a28a911?t%5B0%5D=maxSize%3Awidth%3D100%2Cheight%3D100&t%5B1%5D=compress%3Alevel%3D100&accessToken=58feed5256eafb598d33626ffa833b317e5459d1a85db361cf23e6954c048651" onerror="this.src='/static/v2/images/logo.png'" />
                        </div>
                        <span>Đi chợ</span>
                    </a>
                </li>
                <li>
                    <a href="https://voso.vn/gian-hang-viet">
                        <div class="b__img--thumbs">
                            <img src="https://image.voso.vn/users/vosoimage/images/46fa381726da7f6ed4277595ebf61e37?t%5B0%5D=maxSize%3Awidth%3D100%2Cheight%3D100&t%5B1%5D=compress%3Alevel%3D100&accessToken=a01452b8c355ec352709e29f0bde310b6fac22370baf54929dc6b1b72028a35d" onerror="this.src='/static/v2/images/logo.png'" />
                        </div>
                        <span>Gian hàng Việt</span>
                    </a>
                </li>
                <li>
                    <a href="http://staging.voso.vn/ban-do-dac-san#">
                        <div class="b__img--thumbs">
                            <img src="https://image.voso.vn/users/vosoimage/images/5d240c213659ffc6709cdccd5d04ccc5?t%5B0%5D=maxSize%3Awidth%3D100%2Cheight%3D100&t%5B1%5D=compress%3Alevel%3D100&accessToken=dfe7fda206cdaf441d36d2f0fb81d9ee7ad0969b9b18ad6a751d55e27aa98854" onerror="this.src='/static/v2/images/logo.png'" />
                        </div>
                        <span>Bản đồ đặc sản</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>

<style>
    @media (max-width: 767px) {
        .b__banner--gr .b__banner--info {
            display: none;
        }
    }
</style>
<div class="b__banner--gr">
    <div class="container contaiver-v2">
        <div class="b__banner--info">









            <a data-href="https://media3.scdn.vn/img4/2021/03_09/U6xnR9eyr69B0zhU3Jxg.png" class="flex100 progressive replace">
                <img class="preview" src="https://media3.scdn.vn/img4/2021/03_09/U6xnR9eyr69B0zhU3Jxg.png" width="100%" />
            </a>
        </div>
    </div>
</div>
@if( Session::has('flash_message'))
    <div style="display: none;" class="note note-{{ Session::get('flash_level')}}">
        <p class="flash_message">{{ Session::get('flash_message')}}</p>
    </div>
@endif
@if( count($errors) > 0)
                
    @foreach($errors->all() as $error)
        <div style="display: none;" class="note note-danger">
            <p class="error">{{$error}}</p>
        </div>
    @endforeach
        
@endif
<div class="b__vosoMall--box_list">
    <div class="b__vosoMall">
        <div class="container">
            <div class="b__vosoMall--info">
                <div class="b__box--title">

                    <div class="b__box-title">
                        <h3 class="b__box_h3">Săn sale giờ vàng</h3>
                    </div>
                    <div class="url-all">
                        <a href="https://voso.vn/dac-san-hai-duonghdg-s1120" class="ml-auto">Xem tất cả <i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
                <div class="b__vosoMall--content stretch">

                    <div class="b__vosoMall--banner b__vosoMall--pc">
                        <a href="https://voso.vn/dac-san-hai-duonghdg-s1120" class="progressive replace" data-href="https://cf.shopee.vn/file/f3ceffcefc97d5bbc42f29f982ed1888">
                            <img class="preview" src="https://cf.shopee.vn/file/f3ceffcefc97d5bbc42f29f982ed1888" width="100%" />
                        </a>
                    </div>
                    <div class="b__vosoMall--right ">


                        <div class="category-suggestions">
                        </div>

                        <div id="slideVosomall" class="owl-carousel">
                            <div class="l-items">

                                <div class="f-items">
                                    <div class="f-product-item__thumb">
                                        <a href="https://voso.vn/combo-10-qua-trung-ga-ocop-cam-dong-p737219.html">
                                            <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/f9e0ea299240eb721fb41ab5868b10a8?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=cf59ebeb5b6ef088af4d63b83b3c7fb11c4bb68478ae9965a0168ac32ed751cd">
                                                <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                            </div>
                                            <div class='product-item-price product-item-price-mall'>
                                                <span class="product-price">-9%</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="f-items_description f-items_show-name">
                                        <div class="f-items_name">
                                            <div class="tag-mall">
                                                
                                            </div>
                                            <a href="https://voso.vn/combo-10-qua-trung-ga-ocop-cam-dong-p737219.html">
                                            COMBO 10 QUẢ TRỨNG GÀ OCOP CẨM ĐÔNG </a>
                                        </div>
                                        <div class="f-items__ls main-rating b-sold-rating">
                                            <span class="jstars" data-value="5"></span>
                                            <label class="ml-auto">9067 đã bán</label>
                                        </div>
                                        <div class="b-price">
                                            <div class="b__price">
                                                <strong>22,000<sup>₫</sup></strong>
                                            </div>
                                            <div class="listed-price">
                                                24,000<sup>₫</sup>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="f-items f-hidden">
                                    <div class="f-product-item__thumb">
                                        <a href="https://voso.vn/combo-10-cu-su-hao-vietgap-hai-duong-p737229.html">
                                            <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/1badb56e0335d5bf9b20d079c971acbe?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=0724c8583ba2a97e916f2c458477dbbca856866aed9e52c8a1bdfa8968e52c13">
                                                <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                            </div>
                                            <div class='product-item-price product-item-price-mall'>
                                                <span class="product-price">-10%</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="f-items_description f-items_show-name">
                                        <div class="f-items_name">
                                            <div class="tag-mall">
                                                
                                            </div>
                                            <a href="https://voso.vn/combo-10-cu-su-hao-vietgap-hai-duong-p737229.html">
                                            COMBO 10 CỦ SU HÀO VIETGAP HẢI DƯƠNG </a>
                                        </div>
                                        <div class="f-items__ls main-rating b-sold-rating">
                                            <span class="jstars" data-value="0"></span>
                                            <label class="ml-auto">2118 đã bán</label>
                                        </div>
                                        <div class="b-price">
                                            <div class="b__price">
                                                <strong>20,000<sup>₫</sup></strong>
                                            </div>
                                            <div class="listed-price">
                                                22,000<sup>₫</sup>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="l-items">

                                <div class="f-items">
                                    <div class="f-product-item__thumb">
                                        <a href="https://voso.vn/combo-3-cai-bap-cai-vietgap-hai-duong-p737222.html">
                                            <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/2741119e5ded142c588b7e31c4d4f8a3?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=0380562724995685173ecb7e4b339f4b07c306b40897cb4612bd50b4e7367f05">
                                                <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                            </div>
                                            <div class='product-item-price product-item-price-mall'>
                                                <span class="product-price">-10%</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="f-items_description f-items_show-name">
                                        <div class="f-items_name">
                                            <div class="tag-mall">
                                                
                                            </div>
                                            <a href="https://voso.vn/combo-3-cai-bap-cai-vietgap-hai-duong-p737222.html">
                                            COMBO 3 CÁI BẮP CẢI VIETGAP HẢI DƯƠNG </a>
                                        </div>
                                        <div class="f-items__ls main-rating b-sold-rating">
                                            <span class="jstars" data-value="0"></span>
                                            <label class="ml-auto">1778 đã bán</label>
                                        </div>
                                        <div class="b-price">
                                            <div class="b__price">
                                                <strong>20,000<sup>₫</sup></strong>
                                            </div>
                                            <div class="listed-price">
                                                22,000<sup>₫</sup>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="f-items f-hidden">
                                    <div class="f-product-item__thumb">
                                        <a href="https://voso.vn/combo-5kg-oi-nam-vu-tieu-chuan-ocop-thanh-ha-p737230.html">
                                            <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/5a35aca91a705e07bb4e94886fa85ab8?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=504c4a7145c4b689954f2be62bdbb9f5fc7804160f09fec1a6c35829844686fe">
                                                <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                            </div>
                                            <div class='product-item-price product-item-price-mall'>
                                                <span class="product-price">-19%</span>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="f-items_description f-items_show-name">
                                        <div class="f-items_name">
                                            <div class="tag-mall">
                                                
                                            </div>
                                            <a href="https://voso.vn/combo-5kg-oi-nam-vu-tieu-chuan-ocop-thanh-ha-p737230.html">
                                            Combo 5kg Ổi Nam Vũ Tiêu Chuẩn OCOP Thanh Hà </a>
                                        </div>
                                        <div class="f-items__ls main-rating b-sold-rating">
                                           <span class="jstars" data-value="0"></span>
                                           <label class="ml-auto">1255 đã bán</label>
                                       </div>
                                       <div class="b-price">
                                        <div class="b__price">
                                            <strong>56,000<sup>₫</sup></strong>
                                        </div>
                                        <div class="listed-price">
                                            69,000<sup>₫</sup>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="l-items">

                            <div class="f-items">
                                <div class="f-product-item__thumb">
                                    <a href="https://voso.vn/toi-den-vietkiga-loai-dac-biet-500g-p719584.html">
                                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/174165d4c6394f33a1e5d34f0efb0507?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=154eb61ff7c7fd45307b4be7047c0d9d8e08132c3483f2e8f620cfba15f201ac">
                                            <span class="icon-ocop"></span>
                                            <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        </div>
                                        <span class="jstars jstars__ocop" data-value="4"></span>
                                    </a>
                                </div>
                                <div class="f-items_description f-items_show-name">
                                    <div class="f-items_name">
                                        <div class="tag-mall">
                                            
                                        </div>
                                        <a href="https://voso.vn/toi-den-vietkiga-loai-dac-biet-500g-p719584.html">
                                        TỎI ĐEN VIETKIGA LOẠI ĐẶC BIỆT 500g </a>
                                    </div>
                                    <div class="f-items__ls main-rating b-sold-rating">
                                        <span class="jstars" data-value="0"></span>
                                    </div>
                                    <div class="b-price">
                                        <div class="b__price">
                                            <strong>600,000<sup>₫</sup></strong>
                                        </div>
                                        <div class="listed-price">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="f-items f-hidden">
                                <div class="f-product-item__thumb">
                                    <a href="https://voso.vn/banh-dau-xanh-nguyen-huong-dac-san-hai-duong-p13158.html">
                                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/074a2d914af405a9a7c4e2d4f748d659?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=b5f14568d4785ff1d899880061b3e88130da2f6672cd3fdb927c0b758d71406c">
                                            <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        </div>
                                    </a>
                                </div>
                                <div class="f-items_description f-items_show-name">
                                   <div class="f-items_name">
                                    <div class="tag-mall">
                                        
                                    </div>
                                    <a href="https://voso.vn/banh-dau-xanh-nguyen-huong-dac-san-hai-duong-p13158.html">
                                    BÁNH ĐẬU XANH NGUYÊN HƯƠNG - ĐẶC SẢN HẢI DƯƠNG </a>
                                </div>
                                <div class="f-items__ls main-rating b-sold-rating">
                                    <span class="jstars" data-value="5"></span>
                                    <label class="ml-auto">100 đã bán</label>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>250,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-items">

                        <div class="f-items">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/thung-20-goi-banh-da-ca-ro-an-lien-khanh-tho-p716172.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/6ef4a124d254aabd458682f4cfd8a769?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=6ce654d020c61c9c170d045b5b24821992d061fdb4aad62a025f21c0b074303b">
                                        <span class="icon-ocop"></span>
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <span class="jstars jstars__ocop" data-value="4"></span>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <div class="tag-mall">
                                        
                                    </div>
                                    <a href="https://voso.vn/thung-20-goi-banh-da-ca-ro-an-lien-khanh-tho-p716172.html">
                                    Thùng 20 gói Bánh đa cá rô ăn liền Khánh Thọ </a>
                                </div>
                                <div class="f-items__ls main-rating b-sold-rating">
                                    <span class="jstars" data-value="0"></span>
                                    <label class="ml-auto">2 đã bán</label>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>270,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="f-items f-hidden">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/banh-dau-xanh-nguyen-huong-dac-san-mien-bac-320g-p704819.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/436d6dd8059c1136245bf4da51f4ed6f?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=fe8c55b6beeb7ba56ba2d6adb150ac69d8a308f7a92c685608e6a8a8fd70b4f4">
                                        <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <div class="tag-mall">
                                        
                                    </div>
                                    <a href="https://voso.vn/banh-dau-xanh-nguyen-huong-dac-san-mien-bac-320g-p704819.html">
                                    Bánh Đậu Xanh Nguyên Hương - ĐẶC SẢN MIỀN BẮC 320g </a>
                                </div>
                                <div class="f-items__ls main-rating b-sold-rating">
                                    <span class="jstars" data-value="5"></span>
                                    <label class="ml-auto">273 đã bán</label>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>55,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-items">

                        <div class="f-items">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/combo-10-hop-banh-dau-xanh-rong-vang-viet-huong-125g-p718684.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/33666c400a05ae982e39a79199e5a10d?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=b8841af8b9ada8dc599a0450d26f2c49fcda550d78e47d10dcb46179827747f6">
                                        <span class="icon-ocop"></span>
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <span class="jstars jstars__ocop" data-value="4"></span>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <div class="tag-mall">
                                        
                                    </div>
                                    <a href="https://voso.vn/combo-10-hop-banh-dau-xanh-rong-vang-viet-huong-125g-p718684.html">
                                    Combo 10 Hộp Bánh Đậu Xanh Rồng Vàng Việt Hương 125g </a>
                                </div>
                                <div class="f-items__ls main-rating b-sold-rating">
                                    <span class="jstars" data-value="0"></span>
                                    <label class="ml-auto">1 đã bán</label>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>290,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="f-items f-hidden">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/banh-gai-ninh-giang-dac-san-hai-duong-combo-30-chiec-p6663.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/dee4164b68ff98d7632b945b15cb7550?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=494feaa7187383a5696d39111f4ba109b7e22c7d030fde473847203cad35c2b6">
                                        <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <div class="tag-mall">
                                        
                                    </div>
                                    <a href="https://voso.vn/banh-gai-ninh-giang-dac-san-hai-duong-combo-30-chiec-p6663.html">
                                    BÁNH GAI NINH GIANG - ĐẶC SẢN HẢI DƯƠNG - combo 30 chiếc </a>
                                </div>
                                <div class="f-items__ls main-rating b-sold-rating">
                                    <span class="jstars" data-value="5"></span>
                                    <label class="ml-auto">166 đã bán</label>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>200,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="b__vosoMall">
    <div class="container">
        <div class="b__vosoMall--info">
            <div class="b__box--title">

                <div class="b__box-title">
                    <h3 class="b__box_h3">Sản phẩm mới</h3>
                </div>
                <div class="url-all">
                    <a href="https://voso.vn/mall" class="ml-auto">Xem tất cả <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
            <div class="b__vosoMall--content stretch">

                <div class="b__vosoMall--banner b__vosoMall--pc">
                    <a href="https://voso.vn/flash-sale.html" class="progressive replace" data-href="https://cf.shopee.vn/file/1745822c753e7c0c1043fe990afd1d54">
                        <img class="preview" src="https://cf.shopee.vn/file/1745822c753e7c0c1043fe990afd1d54" width="100%" />
                    </a>
                </div>
                <div class="b__vosoMall--right ">


                    <div class="category-suggestions">
                    </div>

                    <div id="slideVosomall" class="owl-carousel">
                        <div class="l-items">

                            <div class="f-items">
                                <div class="f-product-item__thumb">
                                    <a href="https://voso.vn/hpl817r03-bo-hop-nhua-ll-qua-tang-3pcs-hpl8171-hpl8062-p736526.html">
                                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/85b031c7e4ba0e29640619d03b2ccb08?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=e359b934e61fc2645d0bfaf093b31dd2b4e103a386fc3529b74dd43795e8b20d">
                                            <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        </div>
                                        <div class='product-item-price product-item-price-mall'>
                                            <span class="product-price">-10%</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="f-items_description f-items_show-name">
                                    <div class="f-items_name">
                                        <div class="tag-mall">
                                            
                                        </div>
                                        <a href="https://voso.vn/hpl817r03-bo-hop-nhua-ll-qua-tang-3pcs-hpl8171-hpl8062-p736526.html">
                                        HPL817R03 - BỘ HỘP NHỰA L&amp;L QUÀ TẶNG 3PCS (HPL817(1), HPL806(2)) </a>
                                    </div>
                                    <div class="f-items__ls main-rating b-sold-rating">
                                        <span class="jstars" data-value="0"></span>
                                    </div>
                                    <div class="b-price">
                                        <div class="b__price">
                                            <strong>181,000<sup>₫</sup></strong>
                                        </div>
                                        <div class="listed-price">
                                            199,000<sup>₫</sup>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="f-items f-hidden">
                                <div class="f-product-item__thumb">
                                    <a href="https://voso.vn/hpl817sc04-bo-hop-bao-quan-hpl8171-hpl816c1-hpl8072-p736528.html">
                                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/dbadecb659172821be85ec65310180f5?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=04a361e6b3294684d3d51fa62e59a3a43af0ce8e57abd7f2a2c4b9b908bc9881">
                                            <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        </div>
                                        <div class='product-item-price product-item-price-mall'>
                                            <span class="product-price">-9%</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="f-items_description f-items_show-name">
                                    <div class="f-items_name">
                                        <div class="tag-mall">
                                            
                                        </div>
                                        <a href="https://voso.vn/hpl817sc04-bo-hop-bao-quan-hpl8171-hpl816c1-hpl8072-p736528.html">
                                        HPL817SC04 - BỘ HỘP BẢO QUẢN (HPL817(1), HPL816C(1), HPL807(2)) </a>
                                    </div>
                                    <div class="f-items__ls main-rating b-sold-rating">
                                        <span class="jstars" data-value="0"></span>
                                    </div>
                                    <div class="b-price">
                                        <div class="b__price">
                                            <strong>293,000<sup>₫</sup></strong>
                                        </div>
                                        <div class="listed-price">
                                            319,000<sup>₫</sup>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="l-items">

                            <div class="f-items">
                                <div class="f-product-item__thumb">
                                    <a href="https://voso.vn/hpl770-bo-hop-com-3tier-lunch-box-520ml3-136126180mm-p736525.html">
                                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/59baa37f8127acc481b090f62209440e?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=fb39b03cf4a6dace87ba949775b9de91bb48b68ae7b5f1d5e4525d795670062b">
                                            <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        </div>
                                        <div class='product-item-price product-item-price-mall'>
                                            <span class="product-price">-14%</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="f-items_description f-items_show-name">
                                    <div class="f-items_name">
                                        <div class="tag-mall">
                                            
                                        </div>
                                        <a href="https://voso.vn/hpl770-bo-hop-com-3tier-lunch-box-520ml3-136126180mm-p736525.html">
                                        HPL770 - BỘ HỘP CƠM 3-TIER LUNCH BOX 520ML*3, 136*126*180MM </a>
                                    </div>
                                    <div class="f-items__ls main-rating b-sold-rating">
                                        <span class="jstars" data-value="0"></span>
                                    </div>
                                    <div class="b-price">
                                        <div class="b__price">
                                            <strong>215,000<sup>₫</sup></strong>
                                        </div>
                                        <div class="listed-price">
                                            249,000<sup>₫</sup>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="f-items f-hidden">
                                <div class="f-product-item__thumb">
                                    <a href="https://voso.vn/08atdl-khan-tam-nen-du-lich-kho-146x71mm-p736530.html">
                                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/e879d7dc5cd4c2a7622a1c68b0d34878?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=1ea55fa761915bc015dedac12c2e31d1895519b5a4789556762d47c096884361">
                                            <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        </div>
                                        <div class='product-item-price product-item-price-mall'>
                                            <span class="product-price">-15%</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="f-items_description f-items_show-name">
                                    <div class="f-items_name">
                                        <div class="tag-mall">
                                            
                                        </div>
                                        <a href="https://voso.vn/08atdl-khan-tam-nen-du-lich-kho-146x71mm-p736530.html">
                                        08ATDL - KHĂN TẮM NÉN DU LỊCH (KHỔ 146X71MM) </a>
                                    </div>
                                    <div class="f-items__ls main-rating b-sold-rating">
                                        <span class="jstars" data-value="0"></span>
                                    </div>
                                    <div class="b-price">
                                        <div class="b__price">
                                            <strong>85,000<sup>₫</sup></strong>
                                        </div>
                                        <div class="listed-price">
                                            99,000<sup>₫</sup>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="l-items">

                            <div class="f-items">
                                <div class="f-product-item__thumb">
                                    <a href="https://voso.vn/011a20k-tui-khan-nen-dang-vien-keo-20-vientui-p736539.html">
                                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/e8a3acedd0788faf78835992d43fe7ba?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=e47072c05b8f4d34e70a3b29b609eb5b43cd5f9b5b30553e3e14ea3973cbbd00">
                                            <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        </div>
                                        <div class='product-item-price product-item-price-mall'>
                                            <span class="product-price">-21%</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="f-items_description f-items_show-name">
                                    <div class="f-items_name">
                                        <div class="tag-mall">
                                            
                                        </div>
                                        <a href="https://voso.vn/011a20k-tui-khan-nen-dang-vien-keo-20-vientui-p736539.html">
                                        011A20K - TÚI KHĂN NÉN DẠNG VIÊN KẸO - 20 VIÊN/TÚI </a>
                                    </div>
                                    <div class="f-items__ls main-rating b-sold-rating">
                                        <span class="jstars" data-value="0"></span>
                                    </div>
                                    <div class="b-price">
                                        <div class="b__price">
                                            <strong>55,000<sup>₫</sup></strong>
                                        </div>
                                        <div class="listed-price">
                                            69,000<sup>₫</sup>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="f-items f-hidden">
                                <div class="f-product-item__thumb">
                                    <a href="https://voso.vn/011b30k-mat-na-nen-dang-vien-keo-30-vientui-p736531.html">
                                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/401309008cffdaec477090b21bf99399?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=71d2d69494c1db779996a75439c72bbee13eca97e0488d7220a3f8c63d4ca8a3">
                                            <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        </div>
                                        <div class='product-item-price product-item-price-mall'>
                                            <span class="product-price">-20%</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="f-items_description f-items_show-name">
                                    <div class="f-items_name">
                                        <div class="tag-mall">
                                            
                                        </div>
                                        <a href="https://voso.vn/011b30k-mat-na-nen-dang-vien-keo-30-vientui-p736531.html">
                                        011B30K - MẶT NẠ NÉN DẠNG VIÊN KẸO - 30 VIÊN/TÚI </a>
                                    </div>
                                    <div class="f-items__ls main-rating b-sold-rating">
                                        <span class="jstars" data-value="0"></span>
                                    </div>
                                    <div class="b-price">
                                        <div class="b__price">
                                            <strong>80,000<sup>₫</sup></strong>
                                        </div>
                                        <div class="listed-price">
                                            99,000<sup>₫</sup>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="l-items">

                            <div class="f-items">
                                <div class="f-product-item__thumb">
                                    <a href="https://voso.vn/o8dtube-ong-khan-nen-8-vienong-kho-22x24cm-p736585.html">
                                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/a81a2ca5ce5e52a1ee95173e58dcb5e2?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=6597e1c2744ff1986bffe1294b91ba07a41ea2de76a47d69208938952808437d">
                                            <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        </div>
                                        <div class='product-item-price product-item-price-mall'>
                                            <span class="product-price">-38%</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="f-items_description f-items_show-name">
                                    <div class="f-items_name">
                                        <div class="tag-mall">
                                            
                                        </div>
                                        <a href="https://voso.vn/o8dtube-ong-khan-nen-8-vienong-kho-22x24cm-p736585.html">
                                        O8DTUBE - ỐNG KHĂN NÉN 8 VIÊN/ỐNG (KHỔ 22X24CM) </a>
                                    </div>
                                    <div class="f-items__ls main-rating b-sold-rating">
                                        <span class="jstars" data-value="0"></span>
                                    </div>
                                    <div class="b-price">
                                        <div class="b__price">
                                            <strong>37,000<sup>₫</sup></strong>
                                        </div>
                                        <div class="listed-price">
                                            59,000<sup>₫</sup>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="f-items f-hidden">
                                <div class="f-product-item__thumb">
                                    <a href="https://voso.vn/09a100k-hop-khan-nen-dang-keo-100-vien-kho-22x24cm-p736584.html">
                                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/335761c292851dc192e0d65b3c54a6b6?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=ae115c224625d427b055d73e5e9e5d0bb1c70be5125c869635d0205dc27433b3">
                                            <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        </div>
                                        <div class='product-item-price product-item-price-mall'>
                                            <span class="product-price">-16%</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="f-items_description f-items_show-name">
                                    <div class="f-items_name">
                                        <div class="tag-mall">
                                            
                                        </div>
                                        <a href="https://voso.vn/09a100k-hop-khan-nen-dang-keo-100-vien-kho-22x24cm-p736584.html">
                                        09A100K - HỘP KHĂN NÉN DẠNG KẸO 100 VIÊN (KHỔ 22X24CM) </a>
                                    </div>
                                    <div class="f-items__ls main-rating b-sold-rating">
                                        <span class="jstars" data-value="0"></span>
                                    </div>
                                    <div class="b-price">
                                        <div class="b__price">
                                            <strong>210,000<sup>₫</sup></strong>
                                        </div>
                                        <div class="listed-price">
                                           249,000<sup>₫</sup>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <div class="l-items">

                        <div class="f-items">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/dai-nich-bung-quan-nong-eo-thon-cao-cap-nich-bung-sau-sinh-tan-mo-slimming-onesize-p669239.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/a80ec8b312fb5745aeeeefbb856c57da?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=ce4c9a7eca6e3a012b6509715e638d5853877c0acf29fa1f541f0ae3deb48450">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-38%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <div class="tag-mall">
                                        
                                    </div>
                                    <a href="https://voso.vn/dai-nich-bung-quan-nong-eo-thon-cao-cap-nich-bung-sau-sinh-tan-mo-slimming-onesize-p669239.html">
                                    Đai nịch bụng quấn nóng eo thon cao cấp - Nịch bụng sau sinh tan mỡ Slimming (Onesize) </a>
                                </div>
                                <div class="f-items__ls main-rating b-sold-rating">
                                    <span class="jstars" data-value="5"></span>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>59,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        95,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="f-items f-hidden">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/xit-khoang-voi-collagen-nagano-100ml-p491722.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/82561f94fb51d0985bc6e30e48665335?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=32bdde2fb7b7d5ef449fae03d62097600efdd084436b2abbe8425a6a207cc25a">
                                        <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-17%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <div class="tag-mall">
                                        
                                    </div>
                                    <a href="https://voso.vn/xit-khoang-voi-collagen-nagano-100ml-p491722.html">
                                    XỊT KHOÁNG VỚI COLLAGEN NAGANO - 100ml </a>
                                </div>
                                <div class="f-items__ls main-rating b-sold-rating">
                                    <span class="jstars" data-value="5"></span>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>425,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        510,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-items">

                        <div class="f-items">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/noi-inox-3-day-sunhouse-sh22120-p304348.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/753cc0b7e0d0ef440b26f5a11f1ee155?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=1353f49af2d6c1989fcb97da861671a3684bc7aeff597d57ca0cfbcf0d9f4eae">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-13%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <div class="tag-mall">
                                        
                                    </div>
                                    <a href="https://voso.vn/noi-inox-3-day-sunhouse-sh22120-p304348.html">
                                    Nồi inox 3 đáy SUNHOUSE SH22120 </a>
                                </div>
                                <div class="f-items__ls main-rating b-sold-rating">
                                    <span class="jstars" data-value="5"></span>
                                    <label class="ml-auto">3 đã bán</label>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>175,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        199,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="f-items f-hidden">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/ggomi-korea-do-dung-nha-bep-mk503-set-muoi-va-thia-xao-cute-p612119.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/3d2af26f3862afd8a176cf96567c491c?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=2ce7c6970e9185e36c005cdd094f16e9dc4f4ed9783d7528714b82a0048ba1ae">
                                        <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        <span class="freeship"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <div class="tag-mall">
                                        
                                    </div>
                                    <a href="https://voso.vn/ggomi-korea-do-dung-nha-bep-mk503-set-muoi-va-thia-xao-cute-p612119.html">
                                    [GGOMi KOREA] Đồ dùng nhà bếp - MK503 Set Muôi, Vá, Thìa xào cute </a>
                                </div>
                                <div class="f-items__ls main-rating b-sold-rating">
                                    <span class="jstars" data-value="5"></span>
                                    <label class="ml-auto">2 đã bán</label>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>300,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-items">

                        <div class="f-items">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/bo-qua-tang-khuyen-mai-p613631.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/79830fff492730320dab4197abe00364?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=e3cb94f2077f76f765993e025ee9dc87b7f06522a724b9a4cdd18646f0f57f47">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        <span class="freeship"></span>
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-10%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <div class="tag-mall">
                                        
                                    </div>
                                    <a href="https://voso.vn/bo-qua-tang-khuyen-mai-p613631.html">
                                    Bộ quà tặng - khuyến mại </a>
                                </div>
                                <div class="f-items__ls main-rating b-sold-rating">
                                    <span class="jstars" data-value="5"></span>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>270,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        300,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="f-items f-hidden">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/mt-103-hang-khuyen-mai-qua-tang-p613641.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/8a360f671149b0c66a438a776b26ce9b?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=f551b4005f34490fe93a79bdc503e6d9504968f7857361fe1520426d08d8c615">
                                        <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-10%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <div class="tag-mall">
                                        
                                    </div>
                                    <a href="https://voso.vn/mt-103-hang-khuyen-mai-qua-tang-p613641.html">
                                    MT 103 - Hàng khuyến mại - quà tặng </a>
                                </div>
                                <div class="f-items__ls main-rating b-sold-rating">
                                    <span class="jstars" data-value="5"></span>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>58,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        64,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="b__vosoMall">
    <div class="container">
        <div class="b__vosoMall--info">
            <div class="b__box--title">

                <div class="b__box-title">
                    <h3 class="b__box_h3">Sản phẩm nổi bật</h3>
                </div>
                <div class="url-all">
                    <a href="https://voso.vn/tim-kiem-dac-san?qqq=%C4%91%E1%BA%B7c%20s%E1%BA%A3n" class="ml-auto">Xem tất cả <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
            <div class="b__vosoMall--content stretch">

                <div class="b__vosoMall--banner b__vosoMall--pc">
                    <a href="https://voso.vn/combo-5kg-cam-cao-phong-dac-san-hoa-binh-loai-1-p12708.html" class="progressive replace" data-href="https://cf.shopee.vn/file/159fda3f3b1b99794a5e341cbfd9a33e">
                        <img class="preview" src="https://cf.shopee.vn/file/159fda3f3b1b99794a5e341cbfd9a33e" width="100%" />
                    </a>
                </div>
                <div class="b__vosoMall--right ">


                    <div class="category-suggestions">
                        <a class="categories__item " href="https://voso.vn/dac-san-mien-bac-c138">Đặc sản miền Bắc</a>
                        <a class="categories__item " href="https://voso.vn/dac-san-mien-trung-c139">Đặc sản miền Trung</a>
                        <a class="categories__item " href="https://voso.vn/dac-san-mien-tay-c140">Đặc sản miền Tây</a>
                        <a class="categories__item " href="https://voso.vn/dac-san-nam-bo-c141">Đặc sản Nam Bộ</a>
                        <a class="categories__item " href="https://voso.vn/dac-san-tay-nguyen-c142">Đặc sản Tây Nguyên</a>
                    </div>

                    <div id="slideVosomall" class="owl-carousel">
                        <div class="l-items">

                            <div class="f-items">
                                <div class="f-product-item__thumb">
                                    <a href="https://voso.vn/thit-trau-hun-khoi-gac-bep-hoa-xuan-1-kg-p719622.html">
                                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/b6932ceb68489f4af88944efbf9bb2cb?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=5c83a31dcb1402ec36501b25c361356cef21746cd4b0eb4da3d344d23bfdd5e5">
                                            <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        </div>
                                        <div class='product-item-price product-item-price-mall'>
                                            <span class="product-price">-10%</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="f-items_description f-items_show-name">
                                    <div class="f-items_name">
                                        <div class="tag-mall">
                                            
                                        </div>
                                        <a href="https://voso.vn/thit-trau-hun-khoi-gac-bep-hoa-xuan-1-kg-p719622.html">
                                        Thịt Trâu hun khói (gác bếp) Hoa Xuân - 1 kg </a>
                                    </div>
                                    <div class="f-items__ls main-rating b-sold-rating">
                                        <span class="jstars" data-value="0"></span>
                                        <label class="ml-auto">4 đã bán</label>
                                    </div>
                                    <div class="b-price">
                                        <div class="b__price">
                                            <strong>900,000<sup>₫</sup></strong>
                                        </div>
                                        <div class="listed-price">
                                           1,000,000<sup>₫</sup>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <div class="f-items f-hidden">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/combo-5kg-cam-cao-phong-dac-san-hoa-binh-loai-1-p12708.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/471db93866709b312565ef8665b777f4?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=cbafd8e0c748589adb03e182a5df517e9169e5c6d2d5f853d59b37c9234ec98c">
                                        <span class="icon-ocop"></span>
                                        <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <span class="jstars jstars__ocop" data-value="3"></span>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-36%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <div class="tag-mall">
                                        
                                    </div>
                                    <a href="https://voso.vn/combo-5kg-cam-cao-phong-dac-san-hoa-binh-loai-1-p12708.html">
                                    COMBO 5KG CAM CAO PHONG ĐẶC SẢN HOÀ BÌNH ( LOẠI 1) </a>
                                </div>
                                <div class="f-items__ls main-rating b-sold-rating">
                                    <span class="jstars" data-value="5"></span>
                                    <label class="ml-auto">30 đã bán</label>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>160,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        250,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-items">

                        <div class="f-items">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/5kg-buoi-da-xanh-ben-tre-loai-1-p408199.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/9984d4568efb8f3580e7cc98380c4e60?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=5b17cbae37ef8e400eb58c21c8db9117256f60325e2da930b3c9139a89722325">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                   <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/5kg-buoi-da-xanh-ben-tre-loai-1-p408199.html">
                                5KG BƯỞI DA XANH BẾN TRE LOẠI 1 </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="5"></span>
                                <label class="ml-auto">9 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>199,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="f-items f-hidden">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/phu-tho-che-xanh-bat-tien-long-coc-200g-p726148.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/c5cc95a522171c5b3abe37ffd2981b5a?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=0cf90ac4ae4ffc347e407c5863f9a8b7b6acfa866d6dc19d6f599fca6dd4578a">
                                    <span class="icon-ocop"></span>
                                    <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <span class="jstars jstars__ocop" data-value="4"></span>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-37%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/phu-tho-che-xanh-bat-tien-long-coc-200g-p726148.html">
                                [Phú Thọ] Chè Xanh Bát Tiên Long Cốc 200g </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>120,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    190,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-items">

                    <div class="f-items">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/rau-cau-chi-vang-p732278.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/d973a0ef2e9df5d67e92bfb0c77cdc89?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=db1edb0cbefcfabb2c65cf89b30c31746492204f474e18a4229258ed391b60d0">
                                    <span class="icon-ocop"></span>
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <span class="jstars jstars__ocop" data-value="3"></span>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-8%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/rau-cau-chi-vang-p732278.html">
                                Rau câu chỉ vàng </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>60,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    65,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="f-items f-hidden">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/banh-xoai-ngoc-phung-hop-75g-p728452.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/fb63b4d1050012fb73042c84e39fd627?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=fd84958436f7d79b7abdd4a164ee0701f81806cdbbb300f3ba903a1ab20f5b42">
                                    <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-14%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/banh-xoai-ngoc-phung-hop-75g-p728452.html">
                                Bánh Xoài Ngọc Phụng (Hộp 75g)  </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="0"></span>
                                <label class="ml-auto">2 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>50,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    58,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-items">

                    <div class="f-items">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/gao-st25-gao-vuong-nam-2019-tui-5kg-p521014.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/7c280b396d641913e64f425a7e3131a6?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=d17a403c53337ef7da805c6357e6bda3632ad330982994826289eb8f2f15650a">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-10%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/gao-st25-gao-vuong-nam-2019-tui-5kg-p521014.html">
                                GẠO ST25 - GẠO &quot;VƯƠNG&quot; NĂM 2019 (TÚI 5KG) </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="5"></span>
                                <label class="ml-auto">488 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>180,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    200,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="f-items f-hidden">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/dac-san-tay-nguyen-kho-qua-rung-kon-tum-p727045.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/ec6bb0faa6c523030759864964b181fa?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=5057cd2554ca7bc91a5015834f403f276ea532283dfcfdc5871ed51feaf01455">
                                    <span class="icon-ocop"></span>
                                    <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <span class="jstars jstars__ocop" data-value="3"></span>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-9%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/dac-san-tay-nguyen-kho-qua-rung-kon-tum-p727045.html">
                                ĐẶC SẢN TÂY NGUYÊN - KHỔ QUA RỪNG KON TUM </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>228,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    250,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-items">

                    <div class="f-items">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/keo-sua-dua-nguyen-chat-yen-hoang-tui-1kg-dac-san-ben-tre-p545335.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/390c699d1972b8f3bebd33ee60ce76f0?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=ec6f4a5abeb622079067bc5b6d653c7cc1faa1361668934917bd56c66bff3777">
                                    <span class="icon-ocop"></span>
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <span class="jstars jstars__ocop" data-value="4"></span>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-9%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/keo-sua-dua-nguyen-chat-yen-hoang-tui-1kg-dac-san-ben-tre-p545335.html">
                                Kẹo Sữa Dừa Nguyên Chất Yến Hoàng (Túi 1kg) - Đặc sản Bến Tre </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="5"></span>
                                <label class="ml-auto">14 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>155,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    170,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="f-items f-hidden">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/tra-sam-day-ngoc-linh-dato-25-tui-dac-san-kon-tum-p718371.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/4d80751efd6fb92afdd7b1fb39d68a07?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=92ee1d1474b30e9ad8cfcb789f270719c5b6ed3b4fc710ae0cff59d96aaa79c8">
                                    <span class="icon-ocop"></span>
                                    <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <span class="jstars jstars__ocop" data-value="3"></span>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/tra-sam-day-ngoc-linh-dato-25-tui-dac-san-kon-tum-p718371.html">
                                TRÀ SÂM DÂY NGỌC LINH DATO ( 25 TÚI )_ ĐẶC SẢN KON TUM </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>75,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-items">

                    <div class="f-items">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/bat-dua-ep-son-mai-p22948.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/39de3314e1da80c26fdbf9ec489ac184?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=fa5d5d2b1a912f2355a9bac0eff0b8edf4253b21f5cebda50c94ebf5596de086">
                                    <span class="icon-ocop"></span>
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <span class="jstars jstars__ocop" data-value="4"></span>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-6%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/bat-dua-ep-son-mai-p22948.html">
                                Bát dừa ép sơn mài </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="5"></span>
                                <label class="ml-auto">1 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>80,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    85,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="f-items f-hidden">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/banh-pia-mon-trung-muoitan-hue-vien-p615327.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/78863444f6c0498d19ec2fba4b1faa8e?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=a686ac003bd58734489dbbd40f0248cb0a6179d66f408c501623c3fee5e5e849">
                                    <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-12%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/banh-pia-mon-trung-muoitan-hue-vien-p615327.html">
                                Bánh Pía Môn Trứng Muối_Tân Huê Viên </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="5"></span>
                                <label class="ml-auto">190 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>75,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    85,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-items">

                    <div class="f-items">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/dong-trung-ha-thao-kho-thien-an-p720714.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/bee692f331eab566a19514fd694f6ee5?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=f69477c338fdd6ea3e32c52f0846c835e169b586b77a3e481cd8a3cf2845fa61">
                                    <span class="icon-ocop"></span>
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <span class="jstars jstars__ocop" data-value="4"></span>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-12%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/dong-trung-ha-thao-kho-thien-an-p720714.html">
                                Đông trùng hạ thảo khô Thiên Ân </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>399,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    450,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="f-items f-hidden">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/tra-ca-gai-leo-ho-tro-chuc-nang-gan-hop-125g-duoc-lieu-phu-luong-p717024.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/e50fbe66f4b9fab63e7d7bfec5488672?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=05cc2c0a9eec740a60ca3cd6d3cd781f1d5c1ce7775bf01a32311bec75b56f8b">
                                    <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-30%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/tra-ca-gai-leo-ho-tro-chuc-nang-gan-hop-125g-duoc-lieu-phu-luong-p717024.html">
                                Trà Cà Gai Leo Hỗ Trợ Chức Năng Gan - Hộp 125g - Dược liệu Phú Lương </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="0"></span>
                                <label class="ml-auto">1 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>87,500<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    125,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-items">

                    <div class="f-items">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/vo-quyt-say-p733168.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/173ad68840d1f90b0a19da9caaef8a1d?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=31891abe372234204a0f3d570a5777c3940d2d1090a67d1ecc04b9852f0a5644">
                                    <span class="icon-ocop"></span>
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <span class="jstars jstars__ocop" data-value="3"></span>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-13%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/vo-quyt-say-p733168.html">
                                Vỏ Quýt sấy </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>35,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    40,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="f-items f-hidden">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/toi-den-olvis-50g-p731732.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/cd702ccb42c6ebbde63cf511d2879d86?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=26bdf25cb512903cccb7e3d9c95b627857aa489410034da8fbe5e46f91abe7b1">
                                    <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-16%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/toi-den-olvis-50g-p731732.html">
                                Tỏi đen Olvis 50g </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>80,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    95,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-items">

                    <div class="f-items">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/dac-san-kon-tum-tra-kho-qua-rung-dato-p727062.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/de67a85779b9e7d1734c2a2cad239e1e?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=0cd81aceb29ebaee65b93c26d37d2290ce77cef62d47e1c68b22abf6a1df7f62">
                                    <span class="icon-ocop"></span>
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <span class="jstars jstars__ocop" data-value="3"></span>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-17%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/dac-san-kon-tum-tra-kho-qua-rung-dato-p727062.html">
                                ĐẶC SẢN KON TUM - TRÀ KHỔ QUA RỪNG DATO </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>75,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    90,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="f-items f-hidden">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/nuoc-dong-trung-ha-thao-nice-hop-gom-6-lon-p723194.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/eee90fe1500c1099b20750333a1bcc7f?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=2b42fbe8281013ae557761dcc49406268551965bbe860e0c9cc542981e056eda">
                                    <span class="icon-ocop"></span>
                                    <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <span class="jstars jstars__ocop" data-value="4"></span>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-7%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/nuoc-dong-trung-ha-thao-nice-hop-gom-6-lon-p723194.html">
                                Nước Đông Trùng Hạ Thảo Nice (hộp gồm 6 lon) </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>140,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    150,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-items">

                    <div class="f-items">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/gio-me-xu-nghe-1kg-p721943.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/b47c43f699950e2695a450c1b5e4d37d?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=6979fe78928a0e517b068e14a1da820e56e997071f8ed47987ac4ea2ea534f54">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-21%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/gio-me-xu-nghe-1kg-p721943.html">
                                Giò Me Xứ Nghệ_ 1KG </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="0"></span>
                                <label class="ml-auto">18 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>199,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    250,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="f-items f-hidden">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/ca-mau-tom-kho-dat-dac-san-ca-mau-ntt-p618797.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/29efc2b6eaba83310913a52a78688f1a?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=10ca600150e78e8456a1efbcaded8ae1e72539744ff350392881da83f5619048">
                                    <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-12%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/ca-mau-tom-kho-dat-dac-san-ca-mau-ntt-p618797.html">
                                CÀ MAU_ Tôm Khô đât_ Đặc sản Cà Mau (ntt) </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="5"></span>
                                <label class="ml-auto">279 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>750,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    850,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-items">

                    <div class="f-items">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/keo-sua-dua-nguyen-chat-yen-hoang-tui-1kg-p2331.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/24b88dd323cf6673ccb4c5617b453ad5?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=809e9303cd07c822ca3561f5acf95db996976c15cff3ef490d43910f2476d743">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-12%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/keo-sua-dua-nguyen-chat-yen-hoang-tui-1kg-p2331.html">
                                KẸO SỮA DỪA NGUYÊN CHẤT YẾN HOÀNG (TÚI 1KG) </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="5"></span>
                                <label class="ml-auto">162 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>150,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    170,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="f-items f-hidden">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/ca-mau-1kg-mam-ca-loc-thoi-binh-ngon-dung-chuan-ca-mau-p443185.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/fa4f3f437ec87e50d623ad53a185e270?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=876a37aee3518b56767d89217f4c5e2fd360a5eb996487de2365e8fbc0f13bba">
                                    <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-12%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/ca-mau-1kg-mam-ca-loc-thoi-binh-ngon-dung-chuan-ca-mau-p443185.html">
                                CÀ MAU_ 1kg Mắm cá lóc Thới Bình- Ngon đúng chuẩn_ Cà Mau </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="5"></span>
                                <label class="ml-auto">223 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>220,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    250,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-items">

                    <div class="f-items">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/ca-mauca-kho-loc-xe-nuoi-p501091.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/7daa63462199dff48c5603416999aa0d?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=54190185fe195a3b2fde55a853c791bd4007acfce80071b90a88890553b345ee">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-15%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/ca-mauca-kho-loc-xe-nuoi-p501091.html">
                                CÀ MAU_Cá khô lóc xẻ nuôi </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="5"></span>
                                <label class="ml-auto">218 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>145,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    170,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="f-items f-hidden">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/ca-mau-200gr-cha-bong-tom-tom-dat-dac-san-ca-mau-p613077.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/4e71d55645b404f23c1085d0e07ace91?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=94d9e18cef5043528ada06e0b5ced12999e17f15d523de2091327f33d83ee04f">
                                    <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-13%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/ca-mau-200gr-cha-bong-tom-tom-dat-dac-san-ca-mau-p613077.html">
                                CÀ MAU_ 200gr] Chà bông tôm ( tôm đất)_ Đặc sản Cà Mau </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="5"></span>
                                <label class="ml-auto">212 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>280,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    320,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-items">

                    <div class="f-items">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/banh-pia-dau-xanh-sau-rieng-trung-muoi-tan-hue-vien-p655993.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/3b048d10e6df2aa89c308bf7d02e24c1?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=2c3745d5e15a725c3f0601f81603f116fdc80acca33959a5e1fbb3fa669c839c">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-12%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/banh-pia-dau-xanh-sau-rieng-trung-muoi-tan-hue-vien-p655993.html">
                                Bánh Pía Đậu Xanh Sầu Riêng Trứng Muối_ Tân Huê Viên </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="5"></span>
                                <label class="ml-auto">24 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>75,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    85,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="f-items f-hidden">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/ca-mau-kho-ca-thoi-loi-dac-san-ca-mau-500g-p620095.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/5fc6da95302b77b9c8377bb4031f9299?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=b61245056069c28ff3e7acd9e8a84723e66ea774251eeb055c1cde98418c13a6">
                                    <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-12%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/ca-mau-kho-ca-thoi-loi-dac-san-ca-mau-500g-p620095.html">
                                CÀ MAU_ Khô cá thòi lòi_ Đặc sản Cà Mau 500g </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="5"></span>
                                <label class="ml-auto">215 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>220,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    250,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-items">

                    <div class="f-items">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/combo-5kg-vu-sua-lo-ren-p724500.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/af2a741b6ea122d88a67cb4658076a49?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=d3a9e4c1f8d7da55f0356903423f8d886f1eadfd082308d821a180f2206a66ee">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-17%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/combo-5kg-vu-sua-lo-ren-p724500.html">
                                COMBO 5KG VÚ SỮA LÒ RÈN </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="0"></span>
                                <label class="ml-auto">21 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>250,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    300,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="f-items f-hidden">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/mat-ong-cuong-nga-p723191.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/fceaf7310a86c04ca557bbb9d8e22bf7?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=75477370970fdd229ab4721cdef6d8a999c322ff2611508a18b612a4c8cc78e5">
                                    <span class="icon-ocop"></span>
                                    <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <span class="jstars jstars__ocop" data-value="3"></span>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-15%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/mat-ong-cuong-nga-p723191.html">
                                Mật ong Cường Nga </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="0"></span>
                                <label class="ml-auto">1 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>85,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    100,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-items">

                    <div class="f-items">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/tra-viet-thai-loc-tra-thuong-hang-p723183.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/5d72b28d5d8c310ce9af18a09b3711ef?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=4dc8b408978ae5699a6e1553a1fb5a99ba265e92181bf95cb650230171bcac3c">
                                    <span class="icon-ocop"></span>
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <span class="jstars jstars__ocop" data-value="4"></span>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/tra-viet-thai-loc-tra-thuong-hang-p723183.html">
                                Trà Việt Thái - Lộc trà thượng hạng </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>2,000,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="f-items f-hidden">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/ca-phe-hat-rang-moc-arabica-light-coffee-nguyen-chat-thom-lau-vi-chua-thanh-dang-nhe-1kg2-goi-p721454.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/ba396d9309875c67c2be92248a85797b?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=e60e98469831ef7e1cf981a7f612d548d9c39324c3458356e121e53e91514c7c">
                                    <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-30%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/ca-phe-hat-rang-moc-arabica-light-coffee-nguyen-chat-thom-lau-vi-chua-thanh-dang-nhe-1kg2-goi-p721454.html">
                                Cà phê hạt rang mộc Arabica Light Coffee, nguyên chất, thơm lâu vị chua thanh, đắng nhẹ - 1kg/2 gói </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>282,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    402,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-items">

                    <div class="f-items">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/dau-me-den-nguyen-chat-bao-tam-120-ml-p720694.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/d63157b99e92998537616eb9e89ce4ed?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=933422ce86106582bafc899cd704442f75d420a3a988ad0f4cc012f5e966ff69">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-10%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/dau-me-den-nguyen-chat-bao-tam-120-ml-p720694.html">
                                Dầu Mè Đen Nguyên Chất Bảo Tâm 120 ml </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="0"></span>
                                <label class="ml-auto">2 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>59,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    65,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="f-items f-hidden">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/dau-macca-thinh-phat-chai-20ml-p718408.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/b10cec7651203529cc51bf6eae0fa5d1?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=2132bf202217a71fabb97d34d580587f0adbdfd103144856d0c7c097e80d8975">
                                    <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-13%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/dau-macca-thinh-phat-chai-20ml-p718408.html">
                                Dầu Macca Thịnh Phát Chai 20ml </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>70,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    80,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="b__vosoMall">
    <div class="container">
        <div class="b__vosoMall--info">
            <div class="b__box--title">

                <div class="b__box-title">
                    <h3 class="b__box_h3">Sản phẩm bán chạy</h3>
                </div>
                <div class="url-all">
                    <a href="https://voso.vn/cham-soc-da-c65" class="ml-auto">Xem tất cả <i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>
            <div class="b__vosoMall--content stretch">

                <div class="b__vosoMall--banner b__vosoMall--pc">
                    <a href="https://voso.vn/vs-beauty-s3157181" class="progressive replace" data-href="https://cf.shopee.vn/file/8b056b6b34d3bdd7124792f33f20021d">
                        <img class="preview" src="https://cf.shopee.vn/file/8b056b6b34d3bdd7124792f33f20021d" width="100%" />
                    </a>
                </div>
                <div class="b__vosoMall--right ">


                    <div class="category-suggestions">
                        <a class="categories__item " href="https://voso.vn/suc-khoe-lam-dep-c63">Sức khỏe - Làm đẹp</a>
                        <a class="categories__item " href="https://voso.vn/trang-diem-c64">Trang điểm</a>
                    </div>

                    <div id="slideVosomall" class="owl-carousel">
                        <div class="l-items">

                            <div class="f-items">
                                <div class="f-product-item__thumb">
                                    <a href="https://voso.vn/sap-duong-moi-cho-nu-lip-balm-for-women-p711236.html">
                                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/f4d06bcb5fd739b49b63845e455766a2?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=1c2d01465b271a2dc7ae9ec148397aeb06672a4ef423e58fa5bc3db6f0a45567">
                                            <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        </div>
                                    </a>
                                </div>
                                <div class="f-items_description f-items_show-name">
                                    <div class="f-items_name">
                                        <div class="tag-mall">
                                            
                                        </div>
                                        <a href="https://voso.vn/sap-duong-moi-cho-nu-lip-balm-for-women-p711236.html">
                                        Sáp dưỡng môi cho nữ - Lip Balm For Women </a>
                                    </div>
                                    <div class="f-items__ls main-rating b-sold-rating">
                                        <span class="jstars" data-value="5"></span>
                                    </div>
                                    <div class="b-price">
                                        <div class="b__price">
                                            <strong>150,000<sup>₫</sup></strong>
                                        </div>
                                        <div class="listed-price">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="f-items f-hidden">
                                <div class="f-product-item__thumb">
                                    <a href="https://voso.vn/dau-mu-u-ngan-mun-mau-moi-p680437.html">
                                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/202973a260d468d757fbc98ac017fb4a?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=da2f37f30f40c200b348cc24e8659c51a8fb303c424c1099e033ad3ebd481d1f">
                                            <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        </div>
                                    </a>
                                </div>
                                <div class="f-items_description f-items_show-name">
                                    <div class="f-items_name">
                                        <div class="tag-mall">
                                            
                                        </div>
                                        <a href="https://voso.vn/dau-mu-u-ngan-mun-mau-moi-p680437.html">
                                        Dầu mù u ngăn mụn mẫu mới </a>
                                    </div>
                                    <div class="f-items__ls main-rating b-sold-rating">
                                        <span class="jstars" data-value="5"></span>
                                    </div>
                                    <div class="b-price">
                                        <div class="b__price">
                                            <strong>95,000<sup>₫</sup></strong>
                                        </div>
                                        <div class="listed-price">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="l-items">

                            <div class="f-items">
                                <div class="f-product-item__thumb">
                                    <a href="https://voso.vn/muoi-tam-tinh-dau-sa-chanh-tui-100g-p680429.html">
                                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/873d89f23201c7890d8c76ea74ce33e3?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=3a0242900415315f2fc4d30b774daac7b3da73449fdce5b1a0eb8d319586ec3e">
                                            <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        </div>
                                    </a>
                                </div>
                                <div class="f-items_description f-items_show-name">
                                    <div class="f-items_name">
                                        <div class="tag-mall">
                                            
                                        </div>
                                        <a href="https://voso.vn/muoi-tam-tinh-dau-sa-chanh-tui-100g-p680429.html">
                                        Muối tắm tinh dầu sả chanh (Túi 100g) </a>
                                    </div>
                                    <div class="f-items__ls main-rating b-sold-rating">
                                        <span class="jstars" data-value="5"></span>
                                    </div>
                                    <div class="b-price">
                                        <div class="b__price">
                                            <strong>90,000<sup>₫</sup></strong>
                                        </div>
                                        <div class="listed-price">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="f-items f-hidden">
                                <div class="f-product-item__thumb">
                                    <a href="https://voso.vn/da-thom-khuech-tan-ngoc-lan-hinh-chua-p678669.html">
                                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/600c1ab923068010cca126433e7c14ed?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=5ea0a850eb4972b41e5dbd7ad181a119d555cd1289bd9d5722f1ec703cef5388">
                                            <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        </div>
                                    </a>
                                </div>
                                <div class="f-items_description f-items_show-name">
                                    <div class="f-items_name">
                                        <div class="tag-mall">
                                            
                                        </div>
                                        <a href="https://voso.vn/da-thom-khuech-tan-ngoc-lan-hinh-chua-p678669.html">
                                        Đá thơm khuếch tán ngọc lan Hình Chúa </a>
                                    </div>
                                    <div class="f-items__ls main-rating b-sold-rating">
                                        <span class="jstars" data-value="5"></span>
                                    </div>
                                    <div class="b-price">
                                        <div class="b__price">
                                            <strong>130,000<sup>₫</sup></strong>
                                        </div>
                                        <div class="listed-price">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="l-items">

                            <div class="f-items">
                                <div class="f-product-item__thumb">
                                    <a href="https://voso.vn/bot-tra-xanh-dap-mat-green-tea-powder-p678509.html">
                                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/2fb676d27828cbb9cb0dd20981c163e6?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=d924eacc37053cea2179c780a898e49e7424798fc63168c0957bff957b9bda17">
                                            <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        </div>
                                    </a>
                                </div>
                                <div class="f-items_description f-items_show-name">
                                    <div class="f-items_name">
                                        <div class="tag-mall">
                                            
                                        </div>
                                        <a href="https://voso.vn/bot-tra-xanh-dap-mat-green-tea-powder-p678509.html">
                                        Bột trà xanh đắp mặt - Green Tea Powder </a>
                                    </div>
                                    <div class="f-items__ls main-rating b-sold-rating">
                                        <span class="jstars" data-value="5"></span>
                                    </div>
                                    <div class="b-price">
                                        <div class="b__price">
                                           <strong>75,000<sup>₫</sup></strong>
                                       </div>
                                       <div class="listed-price">
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <div class="f-items f-hidden">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/tinh-bot-nghe-huu-co-turmeric-starch-p678477.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/4bc3afa45d9739918276762599c8ab03?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=e131dddc11a35b6ccd1e09d0e15defd03d9b59203fe1195870140f0e184f63cf">
                                        <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <div class="tag-mall">
                                        
                                    </div>
                                    <a href="https://voso.vn/tinh-bot-nghe-huu-co-turmeric-starch-p678477.html">
                                    Tinh bột nghệ hữu cơ - Turmeric starch </a>
                                </div>
                                <div class="f-items__ls main-rating b-sold-rating">
                                    <span class="jstars" data-value="5"></span>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>130,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-items">

                        <div class="f-items">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/combo-tam-trang-toan-than-truesky-huong-nuoc-hoa-lavender-gom-1-chai-u-trang-100ml-1-chai-duong-trang-lavender-100ml-p681359.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/d8d2025406cbb280ee7f87ff260262f5?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=d5d2708867e8526d3ad564265c26dea4fab8f688b10ae6c8f5f4d0d38ff00732">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-39%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <div class="tag-mall">
                                        
                                    </div>
                                    <a href="https://voso.vn/combo-tam-trang-toan-than-truesky-huong-nuoc-hoa-lavender-gom-1-chai-u-trang-100ml-1-chai-duong-trang-lavender-100ml-p681359.html">
                                    Combo tắm trắng toàn thân Truesky hương nước hoa Lavender gồm 1 chai ủ trắng 100ml &amp; 1 chai dưỡng trắng Lavender 100ml </a>
                                </div>
                                <div class="f-items__ls main-rating b-sold-rating">
                                    <span class="jstars" data-value="5"></span>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>198,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        320,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="f-items f-hidden">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/kem-tan-mo-bung-cap-toc-chiet-xuat-que-gung-truesky-premium-dang-voi-nhan-tiet-kiem-200ml-slimming-cream-p681109.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/1dc7002c74f9e6e98ac8853ef97a2ab8?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=bf5a03bd660f300b16add458a9f4d0528ced295bc2fbdf0b28efaf110e13295e">
                                        <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-36%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <div class="tag-mall">
                                        
                                    </div>
                                    <a href="https://voso.vn/kem-tan-mo-bung-cap-toc-chiet-xuat-que-gung-truesky-premium-dang-voi-nhan-tiet-kiem-200ml-slimming-cream-p681109.html">
                                    Kem tan mỡ bụng cấp tốc chiết xuất quế gừng Truesky Premium dạng vòi nhấn tiết kiệm 200ml - Slimming Cream </a>
                                </div>
                                <div class="f-items__ls main-rating b-sold-rating">
                                    <span class="jstars" data-value="5"></span>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>225,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        350,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="l-items">

                        <div class="f-items">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/serum-tri-mun-trang-da-truesky-premium-chiet-xuat-tram-tra-thien-nhien-20ml-acne-serum-p680641.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/140cf7c99558269e1265c3fb33abeb99?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=866d8fcbb13cc3cc7f4faeab67ac3008710d8f533a375b0541cb61115b6f6de9">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-39%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <div class="tag-mall">
                                        
                                    </div>
                                    <a href="https://voso.vn/serum-tri-mun-trang-da-truesky-premium-chiet-xuat-tram-tra-thien-nhien-20ml-acne-serum-p680641.html">
                                    Serum trị mụn trắng da Truesky Premium chiết xuất tràm trà thiên nhiên 20ml - Acne Serum </a>
                                </div>
                                <div class="f-items__ls main-rating b-sold-rating">
                                    <span class="jstars" data-value="5"></span>
                                    <label class="ml-auto">4 đã bán</label>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>198,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        320,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="f-items f-hidden">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/sua-rua-mat-tao-bot-trang-da-truesky-chiet-xuat-nha-dam-60ml-arbutin-cleanser-p669203.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/fc812303dca3c99dd006f6958a1c0cfa?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=b0141b0be54857bcd462486d8ce96545f9488b2a961cbf868acf006f4f4ac48c">
                                        <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-32%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <div class="tag-mall">
                                       
                                   </div>
                                   <a href="https://voso.vn/sua-rua-mat-tao-bot-trang-da-truesky-chiet-xuat-nha-dam-60ml-arbutin-cleanser-p669203.html">
                                   Sữa rửa mặt tạo bọt trắng da Truesky chiết xuất nha đam 60ml - Arbutin Cleanser </a>
                               </div>
                               <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="5"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>68,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    100,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-items">

                    <div class="f-items">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/sua-rua-mat-tri-mun-than-hoat-tinh-truesky-dang-tao-bot-60ml-ance-cleanser-p668801.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/8572eff1c49861a286ce1e06bc4e3751?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=34feca2ee767c7aa96d004d96e166539e92ff93aad3e857cb08ec831c70ad073">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-29%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/sua-rua-mat-tri-mun-than-hoat-tinh-truesky-dang-tao-bot-60ml-ance-cleanser-p668801.html">
                                Sữa rửa mặt trị mụn than hoạt tính Truesky dạng tạo bọt 60ml - Ance Cleanser </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="5"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>86,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    120,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="f-items f-hidden">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/spirularin-nagel-serum-tri-nam-phuc-hoi-mong-hu-ton-p678695.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/72183bdff9cfb807bf153252aab35dcd?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=efd27d116840812fa94f30e767e2cf7661fedbb0ab521eed5abebcbde47e4c0e">
                                    <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    <span class="freeship"></span>
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-4%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <div class="tag-mall">
                                    
                                </div>
                                <a href="https://voso.vn/spirularin-nagel-serum-tri-nam-phuc-hoi-mong-hu-ton-p678695.html">
                                Spirularin® Nagel Serum Trị nấm &amp; phục hồi móng hư tổn </a>
                            </div>
                            <div class="f-items__ls main-rating b-sold-rating">
                                <span class="jstars" data-value="5"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>805,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    830,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="l-items">

                    <div class="f-items">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/kem-tri-mun-coc-mun-com-sui-mao-ga-spirularin-vs-cream-chlb-duc-p678683.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/8a36fdade05677f07a5859420b61769a?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=b141e25d64ff3ed9f42034d46c7bd7d050dbc9c7cfc7cf3f683063e5cf77246b">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    <span class="freeship"></span>
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-2%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                               <div class="tag-mall">
                                
                            </div>
                            <a href="https://voso.vn/kem-tri-mun-coc-mun-com-sui-mao-ga-spirularin-vs-cream-chlb-duc-p678683.html">
                            Kem trị mụn cóc, mụn cơm, sùi mào gà Spirularin VS Cream - CHLB Đức </a>
                        </div>
                        <div class="f-items__ls main-rating b-sold-rating">
                            <span class="jstars" data-value="5"></span>
                        </div>
                        <div class="b-price">
                            <div class="b__price">
                                <strong>800,000<sup>₫</sup></strong>
                            </div>
                            <div class="listed-price">
                                810,000<sup>₫</sup>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="f-items f-hidden">
                    <div class="f-product-item__thumb">
                        <a href="https://voso.vn/kem-duong-moi-sau-xam-chong-mun-rop-herpes-spirularin-hs-cream-chlb-duc-p678569.html">
                            <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/3f5622360c3be5720c75da34d823aa1f?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=b452ffadb868012f6bf140bd4ed2ff34507c0dcb194dc3bfd2d9cbaec9116816">
                                <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                <span class="freeship"></span>
                            </div>
                            <div class='product-item-price product-item-price-mall'>
                                <span class="product-price">-4%</span>
                            </div>
                        </a>
                    </div>
                    <div class="f-items_description f-items_show-name">
                        <div class="f-items_name">
                            <div class="tag-mall">
                                
                            </div>
                            <a href="https://voso.vn/kem-duong-moi-sau-xam-chong-mun-rop-herpes-spirularin-hs-cream-chlb-duc-p678569.html">
                            Kem dưỡng môi sau xăm chống mụn rộp herpes Spirularin HS Cream - CHLB Đức </a>
                        </div>
                        <div class="f-items__ls main-rating b-sold-rating">
                            <span class="jstars" data-value="5"></span>
                        </div>
                        <div class="b-price">
                            <div class="b__price">
                                <strong>790,000<sup>₫</sup></strong>
                            </div>
                            <div class="listed-price">
                                815,000<sup>₫</sup>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="l-items">

                <div class="f-items">
                    <div class="f-product-item__thumb">
                        <a href="https://voso.vn/kem-tri-nam-va-tai-tao-da-skinmd-pure-whitenol-cream-p655330.html">
                            <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/8bc32d6261e04aef5a3f7d8a32d56296?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=890338230a12f12bf715f3c21560f2f7cf08b9cac70cc10daf99248049004b33">
                                <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                <span class="freeship"></span>
                            </div>
                            <div class='product-item-price product-item-price-mall'>
                                <span class="product-price">-8%</span>
                            </div>
                        </a>
                    </div>
                    <div class="f-items_description f-items_show-name">
                        <div class="f-items_name">
                            <div class="tag-mall">
                                
                            </div>
                            <a href="https://voso.vn/kem-tri-nam-va-tai-tao-da-skinmd-pure-whitenol-cream-p655330.html">
                            Kem trị nám và tái tạo da SkinMD Pure Whitenol Cream </a>
                        </div>
                        <div class="f-items__ls main-rating b-sold-rating">
                            <span class="jstars" data-value="5"></span>
                        </div>
                        <div class="b-price">
                            <div class="b__price">
                                <strong>900,000<sup>₫</sup></strong>
                            </div>
                            <div class="listed-price">
                                968,000<sup>₫</sup>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="f-items f-hidden">
                    <div class="f-product-item__thumb">
                        <a href="https://voso.vn/dau-goi-tri-lieu-cho-da-dau-viem-ngua-skinicer-sedative-shampoo-100ml-duc-p666457.html">
                            <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/0181d7334e895b71c5abeba5278b1852?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=060f6094b4782b5cfdee673e816a3ac6ffa66e5ebc196a1a14912c634c2cb4b3">
                                <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                <span class="freeship"></span>
                            </div>
                            <div class='product-item-price product-item-price-mall'>
                                <span class="product-price">-9%</span>
                            </div>
                        </a>
                    </div>
                    <div class="f-items_description f-items_show-name">
                        <div class="f-items_name">
                            <div class="tag-mall">
                                
                            </div>
                            <a href="https://voso.vn/dau-goi-tri-lieu-cho-da-dau-viem-ngua-skinicer-sedative-shampoo-100ml-duc-p666457.html">
                            Dầu Gội Trị Liệu Cho Da Đầu Viêm Ngứa Skinicer® Sedative Shampoo 100ml - Đức </a>
                        </div>
                        <div class="f-items__ls main-rating b-sold-rating">
                            <span class="jstars" data-value="5"></span>
                        </div>
                        <div class="b-price">
                            <div class="b__price">
                                <strong>600,000<sup>₫</sup></strong>
                            </div>
                            <div class="listed-price">
                                654,000<sup>₫</sup>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="l-items">

                <div class="f-items">
                    <div class="f-product-item__thumb">
                        <a href="https://voso.vn/sua-rua-mat-trang-da-ngua-mun-chiet-xuat-dau-ngua-nagano-110ml-p506284.html">
                            <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/206f338699d9d61a3b3e72a5f9fa2785?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=58167d0114110d3f7bfe131e3c36814694dfdea388b08837f872450063ebaa1c">
                                <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                            </div>
                            <div class='product-item-price product-item-price-mall'>
                                <span class="product-price">-11%</span>
                            </div>
                        </a>
                    </div>
                    <div class="f-items_description f-items_show-name">
                        <div class="f-items_name">
                            <div class="tag-mall">
                                
                            </div>
                            <a href="https://voso.vn/sua-rua-mat-trang-da-ngua-mun-chiet-xuat-dau-ngua-nagano-110ml-p506284.html">
                            SỮA RỬA MẶT TRẮNG DA, NGỪA MỤN CHIẾT XUẤT DẦU NGỰA NAGANO - 110ml </a>
                        </div>
                        <div class="f-items__ls main-rating b-sold-rating">
                            <span class="jstars" data-value="5"></span>
                        </div>
                        <div class="b-price">
                            <div class="b__price">
                                <strong>495,000<sup>₫</sup></strong>
                            </div>
                            <div class="listed-price">
                                555,000<sup>₫</sup>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="f-items f-hidden">
                    <div class="f-product-item__thumb">
                        <a href="https://voso.vn/kem-tre-hoa-da-vung-mat-voi-vitamin-e-nagano-15g-p505939.html">
                            <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/7ddbcc40f4feb8a0e967be211d11ddc1?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=0b1a17f5dd13f019de5c8798ce7b7284d97130f488c3837fd857a2d8b2ffaf27">
                                <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                            </div>
                            <div class='product-item-price product-item-price-mall'>
                                <span class="product-price">-7%</span>
                            </div>
                        </a>
                    </div>
                    <div class="f-items_description f-items_show-name">
                        <div class="f-items_name">
                            <div class="tag-mall">
                                
                            </div>
                            <a href="https://voso.vn/kem-tre-hoa-da-vung-mat-voi-vitamin-e-nagano-15g-p505939.html">
                            KEM TRẺ HÓA DA VÙNG MẮT VỚI VITAMIN E NAGANO - 15g </a>
                        </div>
                        <div class="f-items__ls main-rating b-sold-rating">
                            <span class="jstars" data-value="5"></span>
                        </div>
                        <div class="b-price">
                           <div class="b__price">
                            <strong>490,000<sup>₫</sup></strong>
                        </div>
                        <div class="listed-price">
                            525,000<sup>₫</sup>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="l-items">

            <div class="f-items">
                <div class="f-product-item__thumb">
                    <a href="https://voso.vn/dau-xa-toc-chiet-xuat-dau-ngua-250ml-p505909.html">
                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/53074b6878066ffeb028b1523b5104a8?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=03ca193687977abaee1ca0bee889707008c9aa13c9e947fc2d36cd21dddc162c">
                            <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                        </div>
                        <div class='product-item-price product-item-price-mall'>
                            <span class="product-price">-18%</span>
                        </div>
                    </a>
                </div>
                <div class="f-items_description f-items_show-name">
                    <div class="f-items_name">
                        <div class="tag-mall">
                            
                        </div>
                        <a href="https://voso.vn/dau-xa-toc-chiet-xuat-dau-ngua-250ml-p505909.html">
                        DẦU XẢ TÓC CHIẾT XUẤT DẦU NGỰA - 250ml </a>
                    </div>
                    <div class="f-items__ls main-rating b-sold-rating">
                        <span class="jstars" data-value="5"></span>
                    </div>
                    <div class="b-price">
                        <div class="b__price">
                            <strong>365,000<sup>₫</sup></strong>
                        </div>
                        <div class="listed-price">
                            440,000<sup>₫</sup>
                        </div>
                    </div>
                </div>
            </div>

            <div class="f-items f-hidden">
                <div class="f-product-item__thumb">
                    <a href="https://voso.vn/dau-goi-phuc-hoi-toc-chiet-xuat-dau-ngua-250ml-p505897.html">
                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/5e9487ddf425608753a08b0656d27a66?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=fafac931690a6453923b0efadd81adb4b54645f088234c3f4e9384e6ae5a5d06">
                            <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                        </div>
                        <div class='product-item-price product-item-price-mall'>
                            <span class="product-price">-15%</span>
                        </div>
                    </a>
                </div>
                <div class="f-items_description f-items_show-name">
                    <div class="f-items_name">
                        <div class="tag-mall">
                            
                        </div>
                        <a href="https://voso.vn/dau-goi-phuc-hoi-toc-chiet-xuat-dau-ngua-250ml-p505897.html">
                        DẦU GỘI PHỤC HỒI TÓC CHIẾT XUẤT DẦU NGỰA - 250ml </a>
                    </div>
                    <div class="f-items__ls main-rating b-sold-rating">
                        <span class="jstars" data-value="5"></span>
                    </div>
                    <div class="b-price">
                        <div class="b__price">
                            <strong>365,000<sup>₫</sup></strong>
                        </div>
                        <div class="listed-price">
                            425,000<sup>₫</sup>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="l-items">

            <div class="f-items">
                <div class="f-product-item__thumb">
                    <a href="https://voso.vn/phan-nen-nagano-10g-p496921.html">
                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/00b64011fa76bc47699036142ae8b265?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=64d930966e61d7bf57c8fe12f74e2ddd988033b9d1b1dcfbbfabebfdf0a6783d">
                            <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                        </div>
                        <div class='product-item-price product-item-price-mall'>
                            <span class="product-price">-15%</span>
                        </div>
                    </a>
                </div>
                <div class="f-items_description f-items_show-name">
                    <div class="f-items_name">
                        <div class="tag-mall">
                            
                        </div>
                        <a href="https://voso.vn/phan-nen-nagano-10g-p496921.html">
                        PHẤN NỀN NAGANO - 10g </a>
                    </div>
                    <div class="f-items__ls main-rating b-sold-rating">
                        <span class="jstars" data-value="5"></span>
                    </div>
                    <div class="b-price">
                        <div class="b__price">
                            <strong>485,000<sup>₫</sup></strong>
                        </div>
                        <div class="listed-price">
                            570,000<sup>₫</sup>
                        </div>
                    </div>
                </div>
            </div>

            <div class="f-items f-hidden">
                <div class="f-product-item__thumb">
                    <a href="https://voso.vn/son-li-collagen-nagano-29g-p505795.html">
                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/c199fc8a35dba53509f6dbdedd5a9120?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=8613a75cca3bb77b3e106d93a3001dd8e20ee6d3680889c98ff0b9948fa50e7a">
                            <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                        </div>
                        <div class='product-item-price product-item-price-mall'>
                            <span class="product-price">-22%</span>
                        </div>
                    </a>
                </div>
                <div class="f-items_description f-items_show-name">
                    <div class="f-items_name">
                        <div class="tag-mall">
                            
                        </div>
                        <a href="https://voso.vn/son-li-collagen-nagano-29g-p505795.html">
                        SON LÌ COLLAGEN NAGANO 2,9g </a>
                    </div>
                    <div class="f-items__ls main-rating b-sold-rating">
                        <span class="jstars" data-value="5"></span>
                    </div>
                    <div class="b-price">
                        <div class="b__price">
                            <strong>480,000<sup>₫</sup></strong>
                        </div>
                        <div class="listed-price">
                            610,000<sup>₫</sup>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="l-items">

            <div class="f-items">
                <div class="f-product-item__thumb">
                    <a href="https://voso.vn/phan-nuoc-kiem-soat-nhon-sum37-air-rising-tf-glow-cover-metal-cushion-spf50pa-15g-tang-them-loi-15g-p714248.html">
                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/60f91bbf4657349aa024d69f039b1fae?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=501a6fc991da1f9b052d0a759ab7a5cb282ef9f286791757c0c326f6b0e5d36f">
                            <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                        </div>
                        <div class='product-item-price product-item-price-mall'>
                            <span class="product-price">-10%</span>
                        </div>
                    </a>
                </div>
                <div class="f-items_description f-items_show-name">
                    <div class="f-items_name">
                        <div class="tag-mall">
                            
                        </div>
                        <a href="https://voso.vn/phan-nuoc-kiem-soat-nhon-sum37-air-rising-tf-glow-cover-metal-cushion-spf50pa-15g-tang-them-loi-15g-p714248.html">
                        Phấn nước kiểm soát nhờn Su:m37 Air Rising TF Glow Cover Metal Cushion SPF50+/PA+++ 15g (tặng thêm lõi 15g) </a>
                    </div>
                    <div class="f-items__ls main-rating b-sold-rating">
                        <span class="jstars" data-value="0"></span>
                    </div>
                    <div class="b-price">
                        <div class="b__price">
                            <strong>1,080,000<sup>₫</sup></strong>
                        </div>
                        <div class="listed-price">
                            1,200,000<sup>₫</sup>
                        </div>
                    </div>
                </div>
            </div>

            <div class="f-items f-hidden">
                <div class="f-product-item__thumb">
                    <a href="https://voso.vn/dau-tay-trang-duy-tri-do-am-sum37-skin-saver-essential-cleansing-oil-250ml-p714235.html">
                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/80fa634b1119b6d08d4ca24c930ef7d8?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=2d751cb0b5ebae4e40d7366c946b4d787579361dea40ec5b13f3504fab83fc4e">
                            <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                        </div>
                    </a>
                </div>
                <div class="f-items_description f-items_show-name">
                    <div class="f-items_name">
                        <div class="tag-mall">
                            
                        </div>
                        <a href="https://voso.vn/dau-tay-trang-duy-tri-do-am-sum37-skin-saver-essential-cleansing-oil-250ml-p714235.html">
                        Dầu tẩy trang duy trì độ ẩm Su:m37 Skin Saver Essential Cleansing Oil 250ml </a>
                    </div>
                    <div class="f-items__ls main-rating b-sold-rating">
                        <span class="jstars" data-value="0"></span>
                    </div>
                    <div class="b-price">
                        <div class="b__price">
                            <strong>1,080,000<sup>₫</sup></strong>
                        </div>
                        <div class="listed-price">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="l-items">

            <div class="f-items">
                <div class="f-product-item__thumb">
                    <a href="https://voso.vn/mat-na-ngu-cap-nuoc-chuyen-sau-sum37-waterfull-hydrating-sleeping-mask-100ml-p714191.html">
                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/cc1dfc507b17d3ad60d950c1304ea2b2?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=41bf1f3f8141a0d20a0a34ca6c0d24b26a11d12b6b96aeb5797872dce55ca5b6">
                           <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                       </div>
                       <div class='product-item-price product-item-price-mall'>
                        <span class="product-price">-10%</span>
                    </div>
                </a>
            </div>
            <div class="f-items_description f-items_show-name">
                <div class="f-items_name">
                    <div class="tag-mall">
                        
                    </div>
                    <a href="https://voso.vn/mat-na-ngu-cap-nuoc-chuyen-sau-sum37-waterfull-hydrating-sleeping-mask-100ml-p714191.html">
                    Mặt nạ ngủ cấp nươc chuyên sâu Su:m37 Water-full Hydrating Sleeping Mask 100ml </a>
                </div>
                <div class="f-items__ls main-rating b-sold-rating">
                    <span class="jstars" data-value="0"></span>
                </div>
                <div class="b-price">
                    <div class="b__price">
                        <strong>990,000<sup>₫</sup></strong>
                    </div>
                    <div class="listed-price">
                        1,100,000<sup>₫</sup>
                    </div>
                </div>
            </div>
        </div>

        <div class="f-items f-hidden">
            <div class="f-product-item__thumb">
                <a href="https://voso.vn/set-toner-hoa-hong-mamonde-rose-water-toner-set-mua-1-tang-1-p685813.html">
                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/88a4c9906c482624b43198025a4cb6d6?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=f178eda07bd4203190e8ac87d1c899712ebb9e2436e332bdbf5ceaec6ffd0f7c">
                        <img class="preview thumbnail-product" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                    </div>
                    <div class='product-item-price product-item-price-mall'>
                        <span class="product-price">-13%</span>
                    </div>
                </a>
            </div>
            <div class="f-items_description f-items_show-name">
                <div class="f-items_name">
                    <a href="https://voso.vn/set-toner-hoa-hong-mamonde-rose-water-toner-set-mua-1-tang-1-p685813.html">
                    Set toner hoa hồng Mamonde - Rose water toner set, mua 1 tặng 1 </a>
                </div>
                <div class="f-items__ls main-rating b-sold-rating">
                    <span class="jstars" data-value="0"></span>
                </div>
                <div class="b-price">
                    <div class="b__price">
                        <strong>355,000<sup>₫</sup></strong>
                    </div>
                    <div class="listed-price">
                       405,000<sup>₫</sup>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="b__link--banner">
    <div class="container contaiver-v2">
        <div class="b__link--banner_info">
            <a class="progressive replace" data-href="https://media3.scdn.vn/img4/2021/03_01/uFa7gNSFnX7Ix40bBKRH.png" href="https://bit.ly/tai-app-voso">
                <img class="preview" src="https://media3.scdn.vn/img4/2021/03_01/uFa7gNSFnX7Ix40bBKRH.png" width="100%" />
            </a>
            
            <a class="progressive replace" data-href="https://media3.scdn.vn/img4/2021/01_15/GyPhS3LugjsSHkgT1tjb.png" href="https://voso.vn/bach-hoa-online.html">
                <img class="preview" src="https://media3.scdn.vn/img4/2021/01_15/GyPhS3LugjsSHkgT1tjb.png" width="100%" />
            </a>
            <a class="progressive replace" data-href="https://media3.scdn.vn/img4/2021/03_01/gWx8HOQuCnC2sPkxeLHk.png" href="https://vtbay.vn/">
                <img class="preview" src="https://media3.scdn.vn/img4/2021/03_01/gWx8HOQuCnC2sPkxeLHk.png" width="100%" />
            </a>
        </div>
    </div>
</div>
<style>
	/*.f-items{
		width: auto !important;
       }*/

       @media only screen and (max-device-width: 480px) {
          .btn-center a{
             min-width: 200px !important;
         }
     }

 </style>
 <div class="b__heart">
    <div class="container contaiver-v2">

        <div class="b__box--title">
            <div class="b__box-title">
                <h2><img src="https://voso.vn/static/v2/upload/icon_heart.png" /> Gợi ý hôm nay</h2>
            </div>
            <div class="url-all">
            </div>
        </div>
        <div class="b__heart--info">

            <div class="b__heart--mb">
                <div class="b__heart--content">
                    <div class="f-items">
                        <div class="box-pr-suggest">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/hpl770-bo-hop-com-3tier-lunch-box-520ml3-136126180mm-p736525.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/59baa37f8127acc481b090f62209440e?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=fb39b03cf4a6dace87ba949775b9de91bb48b68ae7b5f1d5e4525d795670062b">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        <div class="tag-mall-product"></div>
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-14%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <a href="https://voso.vn/hpl770-bo-hop-com-3tier-lunch-box-520ml3-136126180mm-p736525.html">
                                    HPL770 - BỘ HỘP CƠM 3-TIER LUNCH BOX 520ML*3, 136*126*180MM </a>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="0"></span>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>215,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        249,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="f-items">
                        <div class="box-pr-suggest">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/combo-2-coc-nguyet-san-beucup-p463786.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/b25f8b8c82cf070ff3e12a9170423b21?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=c69ec93dbf33ed7598ccb3c2c3840712088ad50e39beb135e6baede2e1a76cdf">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-47%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <a href="https://voso.vn/combo-2-coc-nguyet-san-beucup-p463786.html">
                                    Combo 2 Cốc Nguyệt San BeuCup </a>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="0"></span>
                                    <label class="ml-auto">1 đã bán</label>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>749,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        1,399,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="f-items">
                        <div class="box-pr-suggest">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/combo-qua-tang-hoa-nen-tinh-dau-den-xong-p215362.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/6d879db1b21dca0192656e5b2ecbbca5?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=083ccf2ff3c2850598488b5962ef1cf36aaf458af2c6674ca6198979e5d90ff5">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        <div class="tag-mall-product"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <a href="https://voso.vn/combo-qua-tang-hoa-nen-tinh-dau-den-xong-p215362.html">
                                    Combo quà tặng Hoa Nén (tinh dầu, đèn xông...) </a>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="5"></span>
                                    <label class="ml-auto">11 đã bán</label>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>8,000,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="f-items">
                        <div class="box-pr-suggest">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/tinh-dau-tram-hue-kim-vui-50ml-p707187.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/d447313b1b52336b863773dc6692e647?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=5d2a816efaff37068e438ada3306e2e17753f035cc5706e7eca342d32be7afee">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        <div class="tag-mall-product"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <a href="https://voso.vn/tinh-dau-tram-hue-kim-vui-50ml-p707187.html">
                                    Tinh dầu tràm Huế - Kim vui 50ml </a>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="5"></span>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>120,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="f-items">
                        <div class="box-pr-suggest">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/mat-ong-ruoi-200ml-dac-san-ben-tre-p717056.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/4859d354a83f1f4ab0361309b48234c9?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=5f351cc1767bbbd5b6921feab5490781acd5a4fda30500d91d3342d243a50233">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                        <div class="tag-mall-product"></div>
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-20%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <a href="https://voso.vn/mat-ong-ruoi-200ml-dac-san-ben-tre-p717056.html">
                                    MẬT ONG RUỒI (200ML)- Đặc sản Bến Tre </a>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="0"></span>
                                    <label class="ml-auto">1 đã bán</label>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>299,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        370,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="f-items">
                        <div class="box-pr-suggest">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/may-tao-kieu-toc-panasonic-pastehka71w645-50-p716119.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/9360050854b97dff5869445c90b849d9?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=e4d25a3992c9eacc7095fd977b968bf4ad2589f08311f79381995ddd1e38e4be">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-15%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <a href="https://voso.vn/may-tao-kieu-toc-panasonic-pastehka71w645-50-p716119.html">
                                    Máy tạo kiểu tóc Panasonic PAST-EH-KA71W645 5.0 </a>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="0"></span>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>850,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        990,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="f-items">
                        <div class="box-pr-suggest">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/sua-rua-mat-benew-brown-rice-100ml-p715863.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/360920f172d7303cde2bdd9290caf298?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=e0ed403f6c3deb3be203722760c83c105a027e1494c8ca0999fa257d35113db0">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-20%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <a href="https://voso.vn/sua-rua-mat-benew-brown-rice-100ml-p715863.html">
                                    Sữa rửa mặt BENEW Brown Rice 100ml </a>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="0"></span>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>85,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        105,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="f-items">
                        <div class="box-pr-suggest">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/combo-2-ta-quan-sieu-cao-cap-huggies-platinum-m33l27xl24-p708731.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/bb820f7769d5592a4a06423e57fda3ec?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=02845417ebe3dc022d169349f3e8c36e95288a0a8fc8d2cfd3f90f69cff9220a">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-22%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <a href="https://voso.vn/combo-2-ta-quan-sieu-cao-cap-huggies-platinum-m33l27xl24-p708731.html">
                                    Combo 2 Tã quần siêu cao cấp Huggies Platinum M33/L27/XL24 </a>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="0"></span>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>439,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        560,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="f-items">
                        <div class="box-pr-suggest">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/bo-10-mieng-dap-mat-na-benew-natural-herb-mask-pack-green-tea-22ml-p718041.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/76be4584372f3cb45173fe84c93862b7?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=5605e5131fd06176b450a376be110673fdc855ca0655074f5748117e36fe8ead">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-7%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <a href="https://voso.vn/bo-10-mieng-dap-mat-na-benew-natural-herb-mask-pack-green-tea-22ml-p718041.html">
                                    Bộ 10 miếng Đắp mặt nạ Benew Natural Herb Mask Pack - Green Tea 22ml </a>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="0"></span>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>145,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        155,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="f-items">
                        <div class="box-pr-suggest">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/combo-sua-duong-the-va-xit-toan-than-huong-nuoc-hoa-rseries-malaysia-200ml75ml-p717364.html">
                                    <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/2bb5bedfb09da8b7526879d1c246b115?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=4978375d7b6978edd67f67de85e09851fad3685ef406c0a8e64fa3bbbbac3a73">
                                        <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    </div>
                                    <div class='product-item-price product-item-price-mall'>
                                        <span class="product-price">-31%</span>
                                    </div>
                                </a>
                            </div>
                            <div class="f-items_description f-items_show-name">
                                <div class="f-items_name">
                                    <a href="https://voso.vn/combo-sua-duong-the-va-xit-toan-than-huong-nuoc-hoa-rseries-malaysia-200ml75ml-p717364.html">
                                    Combo sữa dưỡng thể và xịt toàn thân hương nước hoa Rseries Malaysia 200ml+75ml </a>
                                </div>
                                <div class="f-items__ls main-rating">
                                    <span class="jstars" data-value="0"></span>
                                </div>
                                <div class="b-price">
                                    <div class="b__price">
                                        <strong>255,000<sup>₫</sup></strong>
                                    </div>
                                    <div class="listed-price">
                                        365,000<sup>₫</sup>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="f-items">
                        <div class="box-pr-suggest">
                            <div class="f-product-item__thumb">
                                <a href="https://voso.vn/ca-phe-rang-xay-dakmarcombo-2-bidac-san-kon-tum-200grbi-p10087.html">
                                   <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/9784cdb8b508fa8ac0f24f24fedb73fe?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=9094872ef661e05011d4c3a81cbccf79ed8b17b74a4b97a361c2f97e602a3684">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    <div class="tag-mall-product"></div>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/ca-phe-rang-xay-dakmarcombo-2-bidac-san-kon-tum-200grbi-p10087.html">
                                CÀ PHÊ RANG XAY DAKMAR(COMBO 2 bì)_ĐẶC SẢN KON TUM (200gr/bì) </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="5"></span>
                                <label class="ml-auto">4 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>188,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/son-duong-dua-cocoben-tre-p299710.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/bafcdc2d2d50bcb0b5a04800b64bd1e1?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=af016ada02ff9e468be4cdd9a680e65a4cf183bda85c0c41cbfbcc18a29de2d9">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    <div class="tag-mall-product"></div>
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-26%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/son-duong-dua-cocoben-tre-p299710.html">
                                SON DƯỠNG DỪA COCO+_Bến Tre </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="5"></span>
                                <label class="ml-auto">9 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>89,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    120,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/dau-dua-nguyen-chat-huong-lavender-p362962.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/0d3d92e8950da3159f0e8684da112176?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=f34ebebef3262bd2d4871223135b8f0befe5e1a428cef12c28d9b7569976a38b">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    <div class="tag-mall-product"></div>
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-12%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/dau-dua-nguyen-chat-huong-lavender-p362962.html">
                                DẦU DỪA NGUYÊN CHẤT HƯƠNG LAVENDER </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="5"></span>
                                <label class="ml-auto">4 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>80,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    90,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/dau-dua-tinh-luyen-vietcoco-p361504.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/8e6b8b652890f99a0ade1c68b2834c2f?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=282ed328cfe673cac9ecfc954c27a73b5bb861303e80464a9ef8c4ded9492466">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    <div class="tag-mall-product"></div>
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-7%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/dau-dua-tinh-luyen-vietcoco-p361504.html">
                                DẦU DỪA TINH LUYỆN VIETCOCO </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="5"></span>
                                <label class="ml-auto">11 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>145,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    155,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/khoai-lang-dac-biet-p462031.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/ccbccf3906b9bd5a859b515ccce62b1b?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=109a5b75a835bf649ae4b7f8fd879304d1aa245118e12c48be0d8c6747362a27">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    <div class="tag-mall-product"></div>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/khoai-lang-dac-biet-p462031.html">
                                Khoai lang đặc biệt </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="5"></span>
                                <label class="ml-auto">86 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>240,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/bot-an-dam-ridielac-gold-ca-hoi-bong-cai-xanh-hop-giay-200g-p722142.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/278b0d4265f6b10d75adbc5d18e14312?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=ab955071f7716283c828b7a357dd6371e297cd50d93fcce06aa53b5ab2facb9e">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-7%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/bot-an-dam-ridielac-gold-ca-hoi-bong-cai-xanh-hop-giay-200g-p722142.html">
                                BỘT ĂN DẶM RIDIELAC GOLD CÁ HỒI BÔNG CẢI XANH - HỘP GIẤY 200G </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>61,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    65,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/combo-3-goi-giay-uot-lec-tinh-khiet-999-e165-cho-tay-va-mieng-80-to-p57097.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/f6e4d1043ff944580857fb1a2a62b3c7?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=e53f64d446ea5902c57e5ea679ddd8a32c07f94a80e82ca2d9f70e3afe5fd8df">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    <div class="tag-mall-product"></div>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/combo-3-goi-giay-uot-lec-tinh-khiet-999-e165-cho-tay-va-mieng-80-to-p57097.html">
                                Combo 3 gói Giấy ướt LEC tinh khiết 99,9% E-165 cho tay và miệng 80 tờ </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="5"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>147,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/sua-bot-vinamilk-canxi-pro-hop-900g-p721984.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/5fd6bf65b24a31482d09cb19147552a4?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=2dff0cb3492ab983cf4cc0f1c24a818434f17d8e51b10267821cb39c0e83aafa">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/sua-bot-vinamilk-canxi-pro-hop-900g-p721984.html">
                                Sữa Bột Vinamilk Canxi Pro Hộp 900g </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>340,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/tp-bvsk-nutrilite-double-x-khong-bao-gom-khay-dung-san-pham-p722016.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/458f0094bc0c3c84008f53c987e07583?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=59fb57d373faa36a10fc22ff63b416c986d4f198356f4d09a3fc33ea680ead19">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-14%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/tp-bvsk-nutrilite-double-x-khong-bao-gom-khay-dung-san-pham-p722016.html">
                                TP BVSK Nutrilite Double X (Không Bao Gồm Khay Đựng Sản Phẩm) </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="0"></span>
                                <label class="ml-auto">1 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>1,075,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    1,250,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/dau-xa-duong-am-satinique-amway-280ml-p721861.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/813b5053d79a12267d0271dc482c1418?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=d464762776999acd5568f1fa842d649a4d45423836c2e39f69e9053d978ab3a6">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-14%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/dau-xa-duong-am-satinique-amway-280ml-p721861.html">
                                Dầu Xả Dưỡng Ẩm Satinique Amway (280ml) </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>198,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    230,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/nuoc-hoa-nu-versace-crystal-noir-100ml-p721228.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/50555f376e442f6ea3492611d21f56cc?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=5f64ae821fd1b58a664e0e76965a8ed51b2e6c2ec44bf0e5e4ac2e47d25fa0e5">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/nuoc-hoa-nu-versace-crystal-noir-100ml-p721228.html">
                                Nước hoa nữ Versace Crystal Noir 100ml </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>490,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/sua-rua-mat-lam-sang-da-va-duong-am-3wb-pretty-face-mild-foam-cleansing-90g-p720490.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/a1f66db741352bd922be2d21d845f108?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=8baf2216dbdf5dea9164da582d48f2e6c8a8011bdfccdd156cf401ba57d55a88">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    <div class="tag-mall-product"></div>
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-45%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/sua-rua-mat-lam-sang-da-va-duong-am-3wb-pretty-face-mild-foam-cleansing-90g-p720490.html">
                                Sữa rửa mặt làm sáng da và dưỡng ẩm 3WB Pretty Face Mild Foam Cleansing 90g </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>250,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    450,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/kem-giam-dau-tinh-dau-da-dieu-uc-gwanjeolae-joint-massage-cream-100g-p720482.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/64e41394784b203db8850040a01f81e3?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=37116f8c583bb71997387eee72b0bea7f654bb1c6e85d7aea26eb16ba89a5fc7">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    <div class="tag-mall-product"></div>
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-45%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/kem-giam-dau-tinh-dau-da-dieu-uc-gwanjeolae-joint-massage-cream-100g-p720482.html">
                                Kem giảm đau tinh dầu đà điểu Úc Gwanjeolae Joint Massage Cream 100g </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="0"></span>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>250,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                    450,000<sup>₫</sup>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/tinh-dau-tram-hue-kim-vui-125ml-p707189.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/2f0f55c086e65be07d1f6c239cc9e269?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=6fe6573ddcb3ed405bdb9544cdf090954ce475919acabe86f8e33ce2a74f3295">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    <div class="tag-mall-product"></div>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/tinh-dau-tram-hue-kim-vui-125ml-p707189.html">
                                Tinh dầu tràm Huế - Kim vui 125ml </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="5"></span>
                                <label class="ml-auto">1 đã bán</label>
                            </div>
                            <div class="b-price">
                                <div class="b__price">
                                    <strong>195,000<sup>₫</sup></strong>
                                </div>
                                <div class="listed-price">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="f-items">
                    <div class="box-pr-suggest">
                        <div class="f-product-item__thumb">
                            <a href="https://voso.vn/combo-6-chai-nuoc-mam-tu-tuyet-490ml-btn-p706571.html">
                                <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/6ee236caee828f5852f8ff1cc0532bd5?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=1efd3fcb697edd5977e0fb5d862e8f673b79ab2f15c8fdfc34208cab098181c3">
                                    <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                    <div class="tag-mall-product"></div>
                                </div>
                                <div class='product-item-price product-item-price-mall'>
                                    <span class="product-price">-3%</span>
                                </div>
                            </a>
                        </div>
                        <div class="f-items_description f-items_show-name">
                            <div class="f-items_name">
                                <a href="https://voso.vn/combo-6-chai-nuoc-mam-tu-tuyet-490ml-btn-p706571.html">
                                COMBO 6 CHAI NƯỚC MẮM TỨ TUYỆT 490ml - BTN </a>
                            </div>
                            <div class="f-items__ls main-rating">
                                <span class="jstars" data-value="5"></span>
                                <label class="ml-auto">3 đã bán</label>
                            </div>
                            <div class="b-price">
                               <div class="b__price">
                                <strong>360,000<sup>₫</sup></strong>
                            </div>
                            <div class="listed-price">
                                370,000<sup>₫</sup>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="f-items">
                <div class="box-pr-suggest">
                    <div class="f-product-item__thumb">
                        <a href="https://voso.vn/tac-xi-muoi-p706051.html">
                            <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/39b492ff21bd411e3ee088893f1d8856?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=e8d641a5bd02735a887f5f182873ce0303c7ffcc80f32a5acf1374374ef1c68c">
                                <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                <div class="tag-mall-product"></div>
                            </div>
                            <div class='product-item-price product-item-price-mall'>
                                <span class="product-price">-20%</span>
                            </div>
                        </a>
                    </div>
                    <div class="f-items_description f-items_show-name">
                        <div class="f-items_name">
                            <a href="https://voso.vn/tac-xi-muoi-p706051.html">
                            TẮC XÍ MUỘI </a>
                        </div>
                        <div class="f-items__ls main-rating">
                            <span class="jstars" data-value="5"></span>
                            <label class="ml-auto">8 đã bán</label>
                        </div>
                        <div class="b-price">
                            <div class="b__price">
                                <strong>40,000<sup>₫</sup></strong>
                            </div>
                            <div class="listed-price">
                                50,000<sup>₫</sup>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="f-items">
                <div class="box-pr-suggest">
                    <div class="f-product-item__thumb">
                        <a href="https://voso.vn/combo-1kg-mang-cau-tay-ninh-vietgap-qua-na-tay-ninh--p705134.html">
                            <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/81e671a0227afc2c184487094d2f0848?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=ec095c53b317ee99c9a58b54e4edb5e12e6b81470d1f93a2f942e5a448e8d956">
                                <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                                <div class="tag-mall-product"></div>
                            </div>
                        </a>
                    </div>
                    <div class="f-items_description f-items_show-name">
                        <div class="f-items_name">
                            <a href="https://voso.vn/combo-1kg-mang-cau-tay-ninh-vietgap-qua-na-tay-ninh--p705134.html">
                            COMBO 1KG - MẢNG CẦU TÂY NINH VietGAP ( Quả Na Tây Ninh ) </a>
                        </div>
                        <div class="f-items__ls main-rating">
                            <span class="jstars" data-value="5"></span>
                            <label class="ml-auto">80 đã bán</label>
                        </div>
                        <div class="b-price">
                            <div class="b__price">
                                <strong>100,000<sup>₫</sup></strong>
                            </div>
                            <div class="listed-price">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="f-items">
                <div class="box-pr-suggest">
                    <div class="f-product-item__thumb">
                        <a href="https://voso.vn/noi-com-dien-nap-gai-comet-18l-cm8018-p717317.html">
                            <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/bdb3a91090edca6363eb3fb8bfee3dca?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=0753e9d743665fc3bb7d64e6b835aeb897ec71d6a5b0b278c39453cae0dc85f7">
                                <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                            </div>
                            <div class='product-item-price product-item-price-mall'>
                               <span class="product-price">-35%</span>
                           </div>
                       </a>
                   </div>
                   <div class="f-items_description f-items_show-name">
                    <div class="f-items_name">
                        <a href="https://voso.vn/noi-com-dien-nap-gai-comet-18l-cm8018-p717317.html">
                        Nồi cơm điện nắp gài Comet 1,8L CM8018 </a>
                    </div>
                    <div class="f-items__ls main-rating">
                        <span class="jstars" data-value="0"></span>
                    </div>
                    <div class="b-price">
                        <div class="b__price">
                            <strong>359,000<sup>₫</sup></strong>
                        </div>
                        <div class="listed-price">
                            550,000<sup>₫</sup>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="f-items">
            <div class="box-pr-suggest">
                <div class="f-product-item__thumb">
                    <a href="https://voso.vn/may-xay-sinh-to-thuy-tinh-2-coi-comet-cm9956-p716738.html">
                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/993750ae52f7347fea28592d4951ed4d?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=f76767d44dfa6a797cb6eb6e755fa275813e11c19b52d3a14bf26f48f6f21190">
                            <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                        </div>
                        <div class='product-item-price product-item-price-mall'>
                            <span class="product-price">-31%</span>
                        </div>
                    </a>
                </div>
                <div class="f-items_description f-items_show-name">
                    <div class="f-items_name">
                        <a href="https://voso.vn/may-xay-sinh-to-thuy-tinh-2-coi-comet-cm9956-p716738.html">
                        Máy xay Sinh tố thủy tinh 2 cối comet CM9956 </a>
                    </div>
                    <div class="f-items__ls main-rating">
                        <span class="jstars" data-value="0"></span>
                    </div>
                    <div class="b-price">
                        <div class="b__price">
                            <strong>299,000<sup>₫</sup></strong>
                        </div>
                        <div class="listed-price">
                            430,000<sup>₫</sup>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="f-items">
            <div class="box-pr-suggest">
                <div class="f-product-item__thumb">
                    <a href="https://voso.vn/am-sieu-toc-sato-st1803n-18l-p703536.html">
                        <div class="f-product-item__thumb-img progressive replace" data-href="https://image.voso.vn/users/vosoimage/images/a217f124d1e0fad64e575cfd3d0afc8b?t%5B0%5D=maxSize%3Awidth%3D320%2Cheight%3D320&t%5B1%5D=compress%3Alevel%3D100&accessToken=8ef99dd7361877be586b1dfe0edaea615fdd04dc8755969b6a790b4795ea4dbc">
                            <img class="preview" src="https://hangnhatgiare.vn/wp-content/themes/hoatuoi/images/loader.gif" alt="image">
                            <div class="tag-mall-product"></div>
                        </div>
                        <div class='product-item-price product-item-price-mall'>
                            <span class="product-price">-13%</span>
                        </div>
                    </a>
                </div>
                <div class="f-items_description f-items_show-name">
                    <div class="f-items_name">
                        <a href="https://voso.vn/am-sieu-toc-sato-st1803n-18l-p703536.html">
                        Ấm siêu tốc SATO ST-1803(N) 1.8L </a>
                    </div>
                    <div class="f-items__ls main-rating">
                        <span class="jstars" data-value="5"></span>
                    </div>
                    <div class="b-price">
                        <div class="b__price">
                            <strong>433,000<sup>₫</sup></strong>
                        </div>
                        <div class="listed-price">
                            495,000<sup>₫</sup>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="b__box--title">

    <div class="b__box-title">
        <h3 class="b__box_h3">Danh mục gợi ý</h3>
    </div>
    <div class="url-all">
    </div>
</div>
<div class="b__tags slide-list-category-name">
    <div class="b__tags--info">
        <div id="slideListCategoryName" class="owl-carousel">
            <div class="m-items b__tags--ls b_tags08">
                <a href="https://voso.vn/suc-khoe-lam-dep-c63">
                Sức khỏe - Làm đẹp </a>
            </div>
            <div class="m-items b__tags--ls b_tags04">
                <a href="https://voso.vn/cham-soc-da-c65">
                Chăm sóc da </a>
            </div>
            <div class="m-items b__tags--ls b_tags04">
                <a href="https://voso.vn/cham-soc-toc-c66">
                Chăm sóc tóc </a>
            </div>
            <div class="m-items b__tags--ls b_tags03">
                <a href="https://voso.vn/bach-hoa-c84">
                Bách hóa </a>
            </div>
            <div class="m-items b__tags--ls b_tags08">
                <a href="https://voso.vn/thoi-trang-nu-c104">
                Thời trang Nữ </a>
            </div>
            <div class="m-items b__tags--ls b_tags08">
               <a href="https://voso.vn/hang-tieu-dung-thuc-pham-c165">
               Hàng tiêu dùng - Thực phẩm </a>
           </div>
           <div class="m-items b__tags--ls b_tags02">
            <a href="https://voso.vn/dac-san-trai-cay-c225">
            Đặc sản trái cây </a>
        </div>
    </div>
</div>
</div>



</div>
</div>
</div>
<style>
    @media only screen and (max-device-width: 480px) {
        .btn-center a{
            min-width: 200px !important;
        }
    }
</style>

@endsection
@section('js')
	<script>
        var baseUrl = '';
        var csrf_token = 'G4gQaNaKrTMDxZlTxb-8DRm3G0agpTRbsOsetMZ1r5Fq50QwuMz9bGar12u3jPtgbeBfFeeXVQ-dikTwlh3__A==' ? 'G4gQaNaKrTMDxZlTxb-8DRm3G0agpTRbsOsetMZ1r5Fq50QwuMz9bGar12u3jPtgbeBfFeeXVQ-dikTwlh3__A==' : '';
        var csrfTokenName = '_csrf' ? '_csrf' : '';
        const locationVersion = '';
    </script>
    <script src="https://voso.vn/assets/e94ae26f/jquery.js?v=1568371444"></script>
    <script src="https://voso.vn/assets/d6da31be/yii.js?v=1566957476"></script>
    <script src="https://voso.vn/assets/31ced6d1/js/bootstrap.js?v=1568371445"></script>
    <script src="https://voso.vn/static/v2/js/jquery-3.2.1.min.js?v=1603338120"></script>
    <script src="https://voso.vn/static/v2/js/bootstrap.min.js?v=1603338120"></script>
    <script src="https://voso.vn/static/v2/js/progressive-image.js?v=1603338120"></script>
    <script src="https://voso.vn/static/v2/js/owl.carousel.min.js?v=1603338120"></script>
    <script src="https://voso.vn/static/v2/js/cloudzoom.js?v=1603338120"></script>
    <script src="https://voso.vn/static/v2/js/jstars.min.js?v=1603338120"></script>
    <script src="https://voso.vn/static/v2/js/style.js?v=1614350823"></script>
    <script src="https://voso.vn/static/v2/js/jquery.nstSlider.js?v=1603338120"></script>
    <script src="https://voso.vn/jsv2/jquery-ui.min.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/utils.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/inputmask.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/imboclient.min.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/angular.min.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/angular-filedialog.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/angular-ui-bootstrap.min.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/moment.min.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/angular-moment.min.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/angular-local-storage.min.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/customSelect.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/angular-recaptcha.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/text-angular-rangy.min.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/text-angular-sanitize.min.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/text-angular.min.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/firebase-app.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/lib/firebase-messaging.js?v=1603338118"></script>
    <script src="https://www.gstatic.com/firebasejs/7.15.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.15.0/firebase-database.js"></script>
    <script src="https://voso.vn/jsv2/app.js?v=1614350823"></script>
    <script src="https://voso.vn/jsv2/modal.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/firebase-notification.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/auth.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/order.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/search.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/style.js?v=1608046089"></script>
    <script src="https://voso.vn/jsv2/angularjs-dropdown-multiselect.min.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/chat.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/angularfire.min.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/popup.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/flashsale-homepage.js?v=1610286800"></script>
    <script src="https://voso.vn/jsv2/flashsale-page.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/currency-mask.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/toastr.min.js?v=1603338118"></script>
    <script src="https://voso.vn/jsv2/recommendation.js?v=1614350823"></script> <script>

        CloudZoom.quickStart();
        $('.nstSlider').nstSlider({
            "rounding": {
                "1000000" : "10000000"
            },
            "left_grip_selector": ".leftGrip",
            "right_grip_selector": ".rightGrip",
            "value_bar_selector": ".bar",
            "value_changed_callback": function(cause, leftValue, rightValue) {
                $('.leftLabel').val(leftValue);
                $('.rightLabel').val(rightValue);
            }
        });
    </script>
   
    <div id="fb-root"></div>
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq)return;
            n = f.fbq = function () {
                n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq)f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script', 'https://connect.facebook.net/vi_VN/fbevents.js');

        fbq('init', '156512524771845');
        fbq('track', "PageView");

        var customer = {"id":"535175","name":"Nguyễn Hoài Nam","email":"namnguyen20132674@gmail.com","phone":"0848384333","address":null,"provinceId":"0","districtId":"0","wardId":"0","province":null,"district":null,"ward":null};
        var maxWeight = 25000;
        if (customer != null) {
            var buyer = {
                buyerName: customer.name,
                buyerEmail: customer.email,
                buyerPhone: customer.phone,
                buyerAddress: customer.address,
                buyerProvinceId: customer.provinceId,
                buyerDistrictId: customer.districtId,
                province: customer.province,
                district: customer.district,
                ward: customer.ward,
            };
        }

        var imboClient = new Imbo.Client({
            hosts: ["https:\/\/image.voso.vn"],
            user: "vosoimage",
            publicKey: "vosoimage",
            privateKey: "imagesovo"        });
        </script>
        <script>
            var firebaseConfig = {
                apiKey: "AIzaSyDVj-qPRypyzuP0cmV45x3_WYX208VfXys",
                authDomain: "voso-f114c.firebaseapp.com",
                databaseURL: "https://voso-f114c.firebaseio.com",
                projectId: "voso-f114c",
                storageBucket: "voso-f114c.appspot.com",
                messagingSenderId: "636113340458",
                appId: "1:636113340458:web:abb7f58ab4a4ed3b2b5b53",
                measurementId: "G-SPNW8FE0RN"
            };
        // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
    </script>

    
    <script>
        $(document).ready(function(){
            $("#show-all-tinh-thanh").click(function(){
                $("#tinh-thanh").removeClass("tinh-thanh");
            });
        });

        $(document).ready(function(){
            if($("#top-referrer-detail")){
                $(window).scroll(function() {
                    var scroll = $(window).scrollTop();
                    if (scroll >= 50) {
                        $("#top-referrer-detail").addClass("detail-fixed-top");
                    }else{
                        $("#top-referrer-detail").removeClass("detail-fixed-top");
                    }
                });
            };


            $(".login_succses_mobile").click(function(){
                $(".login_succses_menu_mobile").toggle();
            });
        });
    </script>
    @if( Session::has('flash_message'))
        <script>
            var message = $(".flash_message").text();
            toastr.success(message);
        </script>
    @endif
    @if( count($errors) > 0)
        <script>
            $(".error").each(function(){
                toastr.warning($(this).text());
            });
        </script>
    @endif
@endsection