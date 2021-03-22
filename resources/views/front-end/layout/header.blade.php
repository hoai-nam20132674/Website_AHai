<div class="b-header 
body-home-page 	    " ng-cloak>
<div class="b__header--top">
    <div class="container">
        <div class="b__top-info">
            <ul class="b__top--left b__top--ls">
                <li style="display: none"><a href="tel:1900 98 98 88">Hotline: 1900 98 98 88</a></li>
                <li><a href="https://mc.voso.vn/">Kênh Người Bán</a></li>
                <li>
                    <div class="download-app">
                        <span class="b_title">Tải ứng dụng</span>
                        <div class="app-vs" style="display: none">
                            <div class="image-qr-code">
                                <img src="https://voso.vn/static/v2/images/qr-code.jpg" alt="">
                            </div>
                            <div class="image-app">
                                <div class="image-app-androi">
                                    <img src="https://voso.vn/static/v2/images/androi.png" alt="Play Store">
                                </div>
                                <div class="image-app-ios">
                                    <img src="https://voso.vn/static/v2/images/ios.png" alt="App Store">
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="https://voso.vn/cdn-cgi/l/email-protection#462e293234290630293529683028"><span class="__cf_email__" >email@gmail.com</span></a></li>
            </ul>
            <ul class="b__top--right b__top--ls">
                @if(Auth::user())
                <li>
                    <div class="b-notification">
                        <div id="formButton" ng-click="toggleNotificationDropdown($event)">
                            <div class="icon-notification">
                                <i class="far fa-bell"></i>
                                <span class="n-news" ng-if="notificationUnreadCount > 0">3</span>
                            </div>
                            <span class="title_notification">Thông báo</span>
                        </div>
                        <div class="UserNotificationDroprown" id="NotificationDroprown" style="">
                            <div class="container-arrow">
                                <span class="arrow-up"></span>
                            </div>
                            <div class="scroll-view">
                                <div ng-repeat="notiObj in notificationList" class="nofifition-drop-item">
                                    <a href="javascript:;" ng-click="handleOnNotificationItemClick(notiObj)">
                                        <div ng-if="notiObj.imageUrl && notiObj.imageUrl.length > 0" class="notification-image" style="background-image: url()">
                                        </div>
                                        <div class="notification-content-description">
                                            <h1 ng-if="notiObj.title && notiObj.title != ''" class="title">
                                                Tiêu đề
                                            </h1>
                                            <div ng-if="notiObj.content && notiObj.content != ''" class="summary" ng-bind-html="highlightOrderCode(notiObj.content)">
                                            </div>
                                            <div ng-if="convertTimesampeToString(notiObj.sendTime) && convertTimesampeToString(notiObj.sendTime) != ''" class="date-submit">
                                               <i class="far fa-clock"></i><span>thời gian</span>
                                           </div>
                                       </div>
                                   </a>
                               </div>
                               <div ng-if="isNotificationListLoading" class="loading-wrapper d-flex flex-row justify-content-center">
                                    <i class="fa fa-spinner fa-pulse fa-1x fa-fw"></i>
                                </div>
                            </div>
                            <a ng-if="notificationList.length || !isNotificationListLoading" class="see-all" href="https://voso.vn/thong-bao-cap-nhat-don-hang.html">
                                Xem tất cả
                            </a>
                        </div>
                    </div>
                </li>
            <li class="login_succses" style="display: block;" >
                <a href="#">
                    <img src="{{asset('uploads/images/systems/avatar_default.png')}}" />
                    <span class="c-admin__text">{{Auth::user()->name}}</span>
                </a>
                <ul class="login_succses_menu">
                    <div class="container-arrow">
                        <span class="arrow-up"></span>
                    </div>
                    <li><a href="https://voso.vn/khach-hang.html">Hồ sơ của tôi</a></li>
                    <li><a href="https://voso.vn/lich-su-mua-hang.html">Lịch sử đơn hàng</a></li>
                    <li><a href="{{URL::route('logout')}}">Đăng xuất</a></li>
                </ul>
            </li>
            <li >
                <a href="{{URL::route('merchantIndex')}}">

                    <i class="fas fa-store-alt"></i>
                    <span>Gian hàng của tôi</span>
                </a>
            </li>
            @else
            <li class="login_none" ng-if="user == null" ng-click="signin()"><a href="#">Đăng Nhập</a></li>
            <li class="login_none bdr_none" ng-if="user == null" ng-click="signup()"><a href="#">Đăng Ký</a></li>
            @endif

        </ul>
    </div>
</div>
</div>
<div class="b__header--bottom">
    <div class="b__header--top_logo">
        <div class="container" ng-controller="search">
            <div class="b__header--logo">
                <div id="nav_list" class="b__icon--menu c-menu-expand js-menu-expand">
                    <a href="https://voso.vn/"><i class="fas fa-bars"></i> </a>
                </div>
                <div class="c-app-ovelay js-app-ovelay"></div>
                <div class="b__logo">
                    <a href="https://voso.vn/"><img style="max-width: 90px" src="https://eskuvotszervezo.hu/wp-content/uploads/2020/07/sample-logo-png-transparent-background-1.png" /></a>
                </div>
                <div class="b__search b__search-pc">
                    <div class="b__search--box">
                        <input type="text" id="inputSearch" ng-change="type()" ng-model="keyword" maxlength="100" autocomplete="off" ng-value="" name="" class="form-control ng-touched" placeholder="Tìm sản phẩm, danh mục hay thương hiệu" ng-keypress="enterSearch($event)" autocomplete="new-password" />
                        <button ng-click="search()" class="btn btn-search" type="submit">
                            <svg class="voso-svg-icon" style="width: 14px; height: 14px" height="19" viewBox="0 0 19 19" width="19">
                                <g fill-rule="evenodd" style="fill: #ffffff" stroke="none" stroke-width="1">
                                    <g transform="translate(-1016 -32)">
                                        <g>
                                            <g transform="translate(405 21)">
                                                <g transform="translate(611 11)">
                                                    <path d="m8 16c4.418278 0 8-3.581722 8-8s-3.581722-8-8-8-8 3.581722-8 8 3.581722 8 8 8zm0-2c-3.3137085 0-6-2.6862915-6-6s2.6862915-6 6-6 6 2.6862915 6 6-2.6862915 6-6 6z">
                                                    </path>
                                                    <path d="m12.2972351 13.7114222 4.9799555 4.919354c.3929077.3881263 1.0260608.3842503 1.4141871-.0086574.3881263-.3929076.3842503-1.0260607-.0086574-1.414187l-4.9799554-4.919354c-.3929077-.3881263-1.0260608-.3842503-1.4141871.0086573-.3881263.3929077-.3842503 1.0260608.0086573 1.4141871z">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </button>
                    </div>
                    <div class="b__tag">
                        <ul>
                            <li><a href="https://voso.vn/tim-kiem-dau-an-nga?qqq=D%E1%BA%A7u+%C4%83n+Nga">Dầu ăn nga</a></li>
                            <li><a href="https://voso.vn/tim-kiem-gio-me?qqq=Gi%C3%B2+me">Giò me</a></li>
                            <li><a href="https://voso.vn/tim-kiem-gao?qqq=G%E1%BA%A1o">Gạo</a></li>
                            <li><a href="https://voso.vn/tim-kiem-dac-san?qqq=%C4%90%E1%BA%B7c+s%E1%BA%A3n">Đặc sản</a></li>
                            <li><a href="https://voso.vn/tim-kiem-do-gia-dung?qqq=%C4%90%E1%BB%93+gia+d%E1%BB%A5ng">Đồ gia dụng</a></li>
                            <li><a href="https://voso.vn/tim-kiem-my-pham?qqq=M%E1%BB%B9+ph%E1%BA%A9m">Mỹ phẩm</a></li>
                            <li><a href="https://voso.vn/tim-kiem-do-dien-tu?qqq=%C4%90%E1%BB%93+%C4%91i%E1%BB%87n+t%E1%BB%AD">Đồ điện tử</a></li>
                            <li><a href="https://voso.vn/tim-kiem-thoi-trang?qqq=Th%E1%BB%9Di+trang">Thời trang</a></li>
                            <li><a href="https://voso.vn/tim-kiem-the-dien-thoai?qqq=Th%E1%BA%BB+%C4%91i%E1%BB%87n+tho%E1%BA%A1i">Thẻ điện thoại</a></li>
                            <li><a href="https://voso.vn/tim-kiem-me-va-be?qqq=M%E1%BA%B9+v%C3%A0+b%C3%A9">Mẹ và bé</a></li>
                        </ul>
                    </div>
                </div>
                <div class="content-box-cart">
                    <div class="b__cart" id="icon32-cart">
                        <a href="https://voso.vn/gio-hang">
                            <img src="https://voso.vn/static/v2/images/cart-icon.svg" class="img_cart" />
                            <span class="total-item-in-cart">0</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="b__header--menu">
        <div class="container">
            <div class="b__menu--inner">
                <div class="c-app-ovelay js-app-ovelay"></div>
                <div class="b__alias">
                    <div class="b__alias--btn">
                        <i class="fas fa-list-ul"></i> Danh mục sản phẩm <i class="fas fa-angle-down"></i>
                    </div>
                    <div class="b__alias--expand c-alias__expand-menu ">
                        <ul>
                            @foreach($categories as $cate)
                                <li>
                                    <a href="{{$cate->url}}"><img src="{{asset('uploads/images/products/categories/'.$cate->avata)}}" alt="icon" />{{$cate->name}}<i class="fas fa-chevron-right"></i>
                                        <i class="fas fa-chevron-up c-alias-mobile__expand-sub"></i>
                                    </a>
                                    @php
                                        $cates_child = App\ProductCate::where('parent_id',$cate->id)->get();
                                    @endphp
                                    @if(count($cates_child))
                                    <div class="c-alias-sub">
                                        <div class="c-alias-sub__content">
                                            <ul>
                                                @foreach($cates_child as $cate_child)
                                                <li><a href="{{$cate_child->url}}">{{$cate_child->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    @else
                                    @endif
                                </li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
                <button type="button" class="c-menusecond-expand js-menusecond-expand" style="display: none;"><i class="fa fa-bars"></i>Menu</button>
                <div class="b__menu--right ml-auto">
                    <ul>
                        @foreach($menus as $menu)
                        <li><a href="{{$menu->url}}">{{$menu->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>