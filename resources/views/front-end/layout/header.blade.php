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
                <li>
                    <div class="b-notification">
                        <div ng-if="user != null" id="formButton" ng-click="toggleNotificationDropdown($event)">
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
            <li class="login_succses" style="display: block;" ng-if="user != null">
                <a href="https://voso.vn/khach-hang.html">
                    <img src="https://voso.vn/static/v2/images/avatar_default.png" />
                    <span class="c-admin__text">Nguyễn Hoài Nam</span>
                </a>
                <ul class="login_succses_menu">
                    <div class="container-arrow">
                        <span class="arrow-up"></span>
                    </div>
                    <li><a href="https://voso.vn/khach-hang.html">Hồ sơ của tôi</a></li>
                    <li><a href="https://voso.vn/lich-su-mua-hang.html">Lịch sử đơn hàng</a></li>
                    <li><a href="https://voso.vn/wallet/history">Ví VoSo</a></li>
                    <li><a href="">Đăng xuất</a></li>
                </ul>
            </li>
            <li ng-if="user != null">
                <a href="https://voso.vn/gian-hang-cua-toi.html">

                    <i class="fas fa-store-alt"></i>
                    <span>Gian hàng của tôi</span>
                </a>
            </li>
            <li class="login_none" ng-if="user == null" ng-click="signin()"><a href="#">Đăng Nhập</a></li>
            <li class="login_none bdr_none" ng-if="user == null" ng-click="signup()"><a href="#">Đăng Ký</a></li>

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
                            <li>
                                <a href="https://voso.vn/san-dac-san-c137"><img src="https://image.voso.vn/users/vosoimage/images/fc85c31734052bd9140f541064710740?t%5B0%5D=compress%3Alevel%3D100&accessToken=c8e8f1f3ae5a7836091e9418f98aeb95cf6e778f78a27748ae08bdca862ba333" alt="icon" />Sàn đặc sản <i class="fas fa-chevron-right"></i>
                                    <i class="fas fa-chevron-up c-alias-mobile__expand-sub"></i>
                                </a>
                                <div class="c-alias-sub">
                                    <div class="c-alias-sub__content">
                                        <ul>
                                            <li><a href="https://voso.vn/dac-san-mien-bac-c138">Đặc sản miền Bắc</a></li>
                                            <li><a href="https://voso.vn/dac-san-mien-trung-c139">Đặc sản miền Trung</a></li>
                                            <li><a href="https://voso.vn/dac-san-mien-tay-c140">Đặc sản miền Tây</a></li>
                                            <li><a href="https://voso.vn/dac-san-nam-bo-c141">Đặc sản Nam Bộ</a></li>
                                            <li><a href="https://voso.vn/dac-san-tay-nguyen-c142">Đặc sản Tây Nguyên</a></li>
                                            <li><a href="https://voso.vn/dac-san-trai-cay-c225">Đặc sản trái cây</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="https://voso.vn/bach-hoa-c84"><img src="https://image.voso.vn/users/vosoimage/images/33e8a70ab47dd54767126854cb3ae7a1?t%5B0%5D=compress%3Alevel%3D100&accessToken=4e7d57de88cb5973bd0ba0381b8785ccb6521d590570c66b0ce14cb42563236e" alt="icon" />Bách hóa <i class="fas fa-chevron-right"></i>
                                    <i class="fas fa-chevron-up c-alias-mobile__expand-sub"></i>
                                </a>
                                <div class="c-alias-sub">
                                    <div class="c-alias-sub__content">
                                        <ul>
                                            <li><a href="https://voso.vn/phong-bep-c227">Phòng bếp</a></li>
                                            <li><a href="https://voso.vn/phong-tam-va-nha-ve-sinh-c229">Phòng tắm và nhà vệ sinh</a></li>
                                            <li><a href="https://voso.vn/phong-khach-c231">Phòng khách</a></li>
                                            <li><a href="https://voso.vn/phong-ngu-c233">Phòng ngủ</a></li>
                                            <li><a href="https://voso.vn/ngoai-nha-c235">Ngoài nhà</a></li>
                                            <li><a href="https://voso.vn/khac-c236">Khác</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="https://voso.vn/thiet-bi-dien-tu-c27"><img src="https://image.voso.vn/users/vosoimage/images/932508c911bc651459590e2e83af9b02?t%5B0%5D=compress%3Alevel%3D100&accessToken=0901cb7c5d2fba14ece544f1fdf11ae9354ea50fc7d22175f6409c64dda69ebf" alt="icon" />Thiết bị điện tử <i class="fas fa-chevron-right"></i>
                                    <i class="fas fa-chevron-up c-alias-mobile__expand-sub"></i>
                                </a>
                                <div class="c-alias-sub">
                                    <div class="c-alias-sub__content">
                                        <ul>
                                            <li><a href="https://voso.vn/dien-thoai-di-dong-c39">Điện thoại di động</a></li>
                                            <li><a href="https://voso.vn/may-tinh-bang-c30">Máy tính bảng</a></li>
                                            <li><a href="https://voso.vn/laptop-c31">Laptop</a></li>
                                            <li><a href="https://voso.vn/may-tinh-de-ban-c32">Máy tính để bàn</a></li>
                                            <li><a href="https://voso.vn/thiet-bi-so-c33">Thiết bị số</a></li>
                                            <li><a href="https://voso.vn/am-thanh-c34">Âm thanh</a></li>
                                            <li><a href="https://voso.vn/may-choi-game-c35">Máy chơi game</a></li>
                                            <li><a href="https://voso.vn/camera-hanh-dong-may-quay-c36">Camera hành động - Máy quay</a></li>
                                            <li><a href="https://voso.vn/camera-giam-sat-c37">Camera giám sát</a></li>
                                            <li><a href="https://voso.vn/camera-ky-thuat-so-c38">Camera kỹ thuật số</a></li>
                                            <li><a href="https://voso.vn/thiet-bi-dien-tu-khac-c40">Thiết bị điện tử khác</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="https://voso.vn/me-be-c74"><img src="https://image.voso.vn/users/vosoimage/images/0f45ef739107cfa63de9a2dd02dc5527?t%5B0%5D=compress%3Alevel%3D100&accessToken=673ed82cbb3011f69ba4f993837c23c3808f8fb72f9707e752ba0bf17bb8284e" alt="icon" />Mẹ & Bé <i class="fas fa-chevron-right"></i>
                                    <i class="fas fa-chevron-up c-alias-mobile__expand-sub"></i>
                                </a>
                                <div class="c-alias-sub">
                                    <div class="c-alias-sub__content">
                                        <ul>
                                            <li><a href="https://voso.vn/sua-c75">Sữa</a></li>
                                            <li><a href="https://voso.vn/do-choi-cho-be-c76">Đồ chơi cho bé</a></li>
                                            <li><a href="https://voso.vn/thoi-trang-phu-kien-cho-be-c77">Thời trang & Phụ kiện cho bé</a></li>
                                            <li><a href="https://voso.vn/do-dung-cho-me-c78">Đồ dùng cho mẹ</a></li>
                                            <li><a href="https://voso.vn/tam-goi-cho-be-c79">Tắm gội cho bé</a></li>
                                            <li><a href="https://voso.vn/cham-soc-tre-so-sinh-tre-nho-c80">Chăm sóc trẻ sơ sinh, trẻ nhỏ</a></li>
                                            <li><a href="https://voso.vn/quan-ao-phu-kien-me-be-c81">Quần áo & Phụ kiện Mẹ Bé</a></li>
                                            <li><a href="https://voso.vn/xe-ghe-diu-va-noi-c82">Xe, Ghế, Địu và Nôi</a></li>
                                            <li><a href="https://voso.vn/ta-dung-cu-ve-sinh-c83">Tã & Dụng cụ vệ sinh</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="https://voso.vn/suc-khoe-lam-dep-c63"><img src="https://image.voso.vn/users/vosoimage/images/110ca606f0903891346e592b072a09c4?t%5B0%5D=compress%3Alevel%3D100&accessToken=67894e36bc5aa0ef055a422a4a2fee800e65bcd04c161cbbaa17c0710c5bcbcf" alt="icon" />Sức khỏe - Làm đẹp <i class="fas fa-chevron-right"></i>
                                    <i class="fas fa-chevron-up c-alias-mobile__expand-sub"></i>
                                </a>
                                <div class="c-alias-sub">
                                    <div class="c-alias-sub__content">
                                        <ul>
                                            <li><a href="https://voso.vn/trang-diem-c64">Trang điểm</a></li>
                                            <li><a href="https://voso.vn/cham-soc-da-c65">Chăm sóc da</a></li>
                                            <li><a href="https://voso.vn/cham-soc-toc-c66">Chăm sóc tóc</a></li>
                                            <li><a href="https://voso.vn/dung-cu-lam-dep-c67">Dụng cụ làm đẹp</a></li>
                                            <li><a href="https://voso.vn/nuoc-hoa-c68">Nước hoa</a></li>
                                            <li><a href="https://voso.vn/thuc-pham-chuc-nang-c69">Thực phẩm chức năng</a></li>
                                            <li><a href="https://voso.vn/cham-soc-co-the-c70">Chăm sóc cơ thể</a></li>
                                            <li><a href="https://voso.vn/cham-soc-cho-nam-gioi-c71">Chăm sóc cho Nam giới</a></li>
                                            <li><a href="https://voso.vn/thiet-bi-y-te-c72">Thiết bị y tế</a></li>
                                            <li><a href="https://voso.vn/cham-soc-ca-nhan-c73">Chăm sóc cá nhân</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="https://voso.vn/dien-gia-dung-c53"><img src="https://image.voso.vn/users/vosoimage/images/2a6ef4b499e9057bc1489d426b720548?t%5B0%5D=compress%3Alevel%3D100&accessToken=50027de918f3fc72acdb075d34ed0b75f723cc5d33c811f061a38c02840d6443" alt="icon" />Điện gia dụng <i class="fas fa-chevron-right"></i>
                                    <i class="fas fa-chevron-up c-alias-mobile__expand-sub"></i>
                                </a>
                                <div class="c-alias-sub">
                                    <div class="c-alias-sub__content">
                                        <ul>
                                            <li><a href="https://voso.vn/tivi-c54">Tivi</a></li>
                                            <li><a href="https://voso.vn/dien-lanh-c55">Điện lạnh</a></li>
                                            <li><a href="https://voso.vn/thiet-bi-dien-gia-dung-c56">Thiết bị điện gia dụng</a></li>
                                            <li><a href="https://voso.vn/dien-gia-dung-nha-bep-c57">Điện gia dụng nhà bếp</a></li>
                                            <li><a href="https://voso.vn/may-hut-bui-ve-sinh-c58">Máy hút bụi & Vệ sinh</a></li>
                                            <li><a href="https://voso.vn/ban-ui-may-may-c59">Bàn ủi & Máy may</a></li>
                                            <li><a href="https://voso.vn/thiet-bi-cham-soc-ca-nhan-c60">Thiết bị chăm sóc cá nhân</a></li>
                                            <li><a href="https://voso.vn/dan-am-thanh-gia-dinh-c61">Dàn âm thanh gia đình</a></li>
                                            <li><a href="https://voso.vn/thiet-bi-dien-gia-dung-khac-c62">Thiết bị điện gia dụng khác</a></li>
                                            <li><a href="https://voso.vn/dieu-hoa-loc-khong-khi-c164">Điều hòa & lọc không khí</a></li>
                                            <li><a href="https://voso.vn/lap-dat-bao-tri-c196">Lắp đặt & Bảo trì</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="https://voso.vn/phu-kien-thiet-bi-so-c41"><img src="https://image.voso.vn/users/vosoimage/images/78ba3f91eeb1229c5d811182a9c164d7?t%5B0%5D=compress%3Alevel%3D100&accessToken=a6b323ab30a0ab6d807c07a88cf1edc93b0f62017b4a53a6e2b9c34f265ad4bc" alt="icon" />Phụ kiện thiết bị số <i class="fas fa-chevron-right"></i>
                                    <i class="fas fa-chevron-up c-alias-mobile__expand-sub"></i>
                                </a>
                                <div class="c-alias-sub">
                                    <div class="c-alias-sub__content">
                                        <ul>
                                            <li><a href="https://voso.vn/phu-kien-dien-thoai-c42">Phụ kiện điện thoại</a></li>
                                            <li><a href="https://voso.vn/phu-kien-dien-tu-c43">Phụ kiện điện tử</a></li>
                                            <li><a href="https://voso.vn/thiet-bi-mang-c44">Thiết bị mạng</a></li>
                                            <li><a href="https://voso.vn/thiet-bi-so-c45">Thiết bị số</a></li>
                                            <li><a href="https://voso.vn/thiet-bi-luu-tru-c46">Thiết bị lưu trữ</a></li>
                                            <li><a href="https://voso.vn/phu-kien-may-tinh-c47">Phụ kiện máy tính</a></li>
                                            <li><a href="https://voso.vn/phu-kien-may-choi-game-c48">Phụ kiện máy chơi Game</a></li>
                                            <li><a href="https://voso.vn/linh-kien-may-tinh-c49">Linh kiện máy tính</a></li>
                                            <li><a href="https://voso.vn/thiet-bi-deo-c50">Thiết bị đeo</a></li>
                                            <li><a href="https://voso.vn/may-in-scan-c51">Máy in & Scan</a></li>
                                            <li><a href="https://voso.vn/phu-kien-khac-c52">Phụ kiện khác</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="https://voso.vn/thoi-trang-nam-c94"><img src="https://image.voso.vn/users/vosoimage/images/dde4ce41ee3a5224caced97ccca24902?t%5B0%5D=compress%3Alevel%3D100&accessToken=b5d5b06e793451a3d8f0cb2b972c1ffa9670c87f83d77158e0c2c177ebd0a177" alt="icon" />Thời trang Nam <i class="fas fa-chevron-right"></i>
                                    <i class="fas fa-chevron-up c-alias-mobile__expand-sub"></i>
                                </a>
                                <div class="c-alias-sub">
                                    <div class="c-alias-sub__content">
                                        <ul>
                                            <li><a href="https://voso.vn/trang-phuc-nam-c95">Trang phục Nam</a></li>
                                            <li><a href="https://voso.vn/giay-nam-c96">Giày Nam</a></li>
                                            <li><a href="https://voso.vn/do-lot-nam-c97">Đồ lót Nam</a></li>
                                            <li><a href="https://voso.vn/tui-xach-nam-c98">Túi xách Nam</a></li>
                                            <li><a href="https://voso.vn/phu-kien-nam-c99">Phụ kiện Nam</a></li>
                                            <li><a href="https://voso.vn/trang-phuc-be-trai-c100">Trang phục Bé Trai</a></li>
                                            <li><a href="https://voso.vn/giay-be-trai-c101">Giày Bé Trai</a></li>
                                            <li><a href="https://voso.vn/tui-balo-be-trai-c102">Túi & Balo bé trai</a></li>
                                            <li><a href="https://voso.vn/phu-kien-be-trai-c103">Phụ kiện Bé Trai</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="https://voso.vn/thoi-trang-nu-c104"><img src="https://image.voso.vn/users/vosoimage/images/3d3743289b5725a8873860dc222d1471?t%5B0%5D=compress%3Alevel%3D100&accessToken=b38f78e72ee399fd6ec246d90b164c887d281ffb19dce4a8505f176885965d67" alt="icon" />Thời trang Nữ <i class="fas fa-chevron-right"></i>
                                    <i class="fas fa-chevron-up c-alias-mobile__expand-sub"></i>
                                </a>
                                <div class="c-alias-sub">
                                    <div class="c-alias-sub__content">
                                        <ul>
                                            <li><a href="https://voso.vn/trang-phuc-nu-c105">Trang phục Nữ</a></li>
                                            <li><a href="https://voso.vn/giay-nu-c106">Giày Nữ</a></li>
                                            <li><a href="https://voso.vn/tui-xach-nu-c107">Túi xách nữ</a></li>
                                            <li><a href="https://voso.vn/phu-kien-nu-c108">Phụ kiện Nữ</a></li>
                                            <li><a href="https://voso.vn/do-ngu-noi-y-c109">Đồ ngủ & Nội y</a></li>
                                            <li><a href="https://voso.vn/trang-phuc-be-gai-c110">Trang phục Bé Gái</a></li>
                                            <li><a href="https://voso.vn/giay-be-gai-c111">Giày Bé Gái</a></li>
                                            <li><a href="https://voso.vn/tui-xach-balo-be-gai-c112">Túi xách & Balo bé gái</a></li>
                                            <li><a href="https://voso.vn/phu-kien-be-gai-c113">Phụ kiện Bé Gái</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="https://voso.vn/the-thao-du-lich-c114"><img src="https://image.voso.vn/users/vosoimage/images/f97f18483dc50aebe32ce3c86aff83d4?t%5B0%5D=compress%3Alevel%3D100&accessToken=e6701774ab63d2f3f841bac9db04dbb687fc1e8b9b939a76666a93c7f8f4c907" alt="icon" />Thể thao - Du lịch <i class="fas fa-chevron-right"></i>
                                    <i class="fas fa-chevron-up c-alias-mobile__expand-sub"></i>
                                </a>
                                <div class="c-alias-sub">
                                    <div class="c-alias-sub__content">
                                        <ul>
                                            <li><a href="https://voso.vn/gym-yoga-finess-c115">Gym - Yoga - Finess</a></li>
                                            <li><a href="https://voso.vn/thuc-pham-bo-sung-nang-luong-c116">Thực phẩm bổ sung năng lượng</a></li>
                                            <li><a href="https://voso.vn/thoi-trang-the-thao-nam-c117">Thời trang thể thao Nam</a></li>
                                            <li><a href="https://voso.vn/thoi-trang-the-thao-nu-c118">Thời trang thể thao Nữ</a></li>
                                            <li><a href="https://voso.vn/vali-tui-du-lich-c119">Vali & Túi du lịch</a></li>
                                            <li><a href="https://voso.vn/ve-may-bay-c120">Vé máy bay</a></li>
                                            <li><a href="https://voso.vn/phu-kien-the-thao-c121">Phụ kiện thể thao</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="https://voso.vn/oto-xe-may-c122"><img src="https://image.voso.vn/users/vosoimage/images/fcec0091b0dbdb4fab64e68f58d3006f?t%5B0%5D=compress%3Alevel%3D100&accessToken=57dfea498cfc8dcf2ca7aac45cc8b1bed780f5aba80b26686d86ce912e88d1f2" alt="icon" />Ôtô - Xe máy <i class="fas fa-chevron-right"></i>
                                    <i class="fas fa-chevron-up c-alias-mobile__expand-sub"></i>
                                </a>
                                <div class="c-alias-sub">
                                    <div class="c-alias-sub__content">
                                        <ul>
                                            <li><a href="https://voso.vn/oto-c123">Ôtô</a></li>
                                            <li><a href="https://voso.vn/xe-may-c124">Xe máy</a></li>
                                            <li><a href="https://voso.vn/phu-kien-dich-vu-oto-c125">Phụ kiện & Dịch vụ Ôtô</a></li>
                                            <li><a href="https://voso.vn/phu-kien-dich-vu-xe-may-c126">Phụ kiện & Dịch vụ xe máy</a></li>
                                            <li><a href="https://voso.vn/dich-vu-cham-soc-xe-c127">Dịch vụ chăm sóc xe</a></li>
                                            <li><a href="https://voso.vn/do-bao-ho-xe-may-c128">Đồ bảo hộ xe máy</a></li>
                                            <li><a href="https://voso.vn/dau-nhot-xe-may-c129">Dầu nhớt xe máy</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="https://voso.vn/hang-nhap-khau-c130"><img src="https://image.voso.vn/users/vosoimage/images/8db6f2b0bd59b452112513f88f4bec90?t%5B0%5D=compress%3Alevel%3D100&accessToken=5edce3ade469e38240e7e04091d215824e0a619102534ce75057a6f3099216cc" alt="icon" />Hàng nhập khẩu <i class="fas fa-chevron-right"></i>
                                    <i class="fas fa-chevron-up c-alias-mobile__expand-sub"></i>
                                </a>
                                <div class="c-alias-sub">
                                    <div class="c-alias-sub__content">
                                        <ul>
                                            <li><a href="https://voso.vn/do-dung-nha-bep-c131">Đồ dùng nhà bếp</a></li>
                                            <li><a href="https://voso.vn/sua-c132">Sữa</a></li>
                                            <li><a href="https://voso.vn/thoi-trang-nam-nhap-khau-c133">Thời trang Nam nhập khẩu</a></li>
                                            <li><a href="https://voso.vn/thoi-trang-nu-nhap-khau-c134">Thời trang Nữ nhập khẩu</a></li>
                                            <li><a href="https://voso.vn/phu-kien-thoi-trang-nhap-khau-c135">Phụ kiện thời trang nhập khẩu</a></li>
                                            <li><a href="https://voso.vn/do-dung-gia-dinh-nhap-khau-c136">Đồ dùng gia đình nhập khẩu</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="https://voso.vn/thu-cong-my-nghe-c143"><img src="https://image.voso.vn/users/vosoimage/images/ee8cac19e26a23ab6eafffaac14bedfc?t%5B0%5D=compress%3Alevel%3D100&accessToken=cbec9ee146f6a33f5d3124ad1c0d050e9f76bb79ad214beba6f6a79f36135a57" alt="icon" />Thủ công mỹ nghệ <i class="fas fa-chevron-right"></i>
                                    <i class="fas fa-chevron-up c-alias-mobile__expand-sub"></i>
                                </a>
                                <div class="c-alias-sub">
                                    <div class="c-alias-sub__content">
                                        <ul>
                                            <li><a href="https://voso.vn/do-go-c144">Đồ gỗ</a></li>
                                            <li><a href="https://voso.vn/may-tre-coi-c145">Mây. Tre, Cói</a></li>
                                            <li><a href="https://voso.vn/det-may-c146">Dệt may</a></li>
                                            <li><a href="https://voso.vn/gom-su-c147">Gốm - Sứ</a></li>
                                            <li><a href="https://voso.vn/giay-c148">Giấy</a></li>
                                            <li><a href="https://voso.vn/theu-ren-c149">Thêu - Ren</a></li>
                                            <li><a href="https://voso.vn/kim-khi-my-nghe-c150">Kim khí mỹ nghệ</a></li>
                                            <li><a href="https://voso.vn/tranh-anh-nghe-thuat-c151">Tranh - Ảnh nghệ thuật</a></li>
                                            <li><a href="https://voso.vn/do-dung-khac-c152">Đồ dùng khác</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="https://voso.vn/co-khi-xay-dung-c153"><img src="https://image.voso.vn/users/vosoimage/images/6aedb1ea27cd5aef06aa18cb4565135b?t%5B0%5D=compress%3Alevel%3D100&accessToken=0acc65a9205e5de72d5ce7b8d0e5f24239a57cf68b8a34fbff17f294225e3532" alt="icon" />Cơ khí - Xây dựng <i class="fas fa-chevron-right"></i>
                                    <i class="fas fa-chevron-up c-alias-mobile__expand-sub"></i>
                                </a>
                                <div class="c-alias-sub">
                                    <div class="c-alias-sub__content">
                                        <ul>
                                            <li><a href="https://voso.vn/co-khi-che-tao-c154">Cơ khí chế tạo</a></li>
                                            <li><a href="https://voso.vn/may-moc-thiet-bi-khac-c178">Máy móc thiết bị khác</a></li>
                                            <li><a href="https://voso.vn/vat-lieu-xay-dung-c193">Vật liệu xây dựng</a></li>
                                            <li><a href="https://voso.vn/thiet-bi-san-xuat-c155">Thiết bị sản xuất</a></li>
                                            <li><a href="https://voso.vn/thiet-bi-cong-nghiep-c156">Thiết bị công nghiệp</a></li>
                                            <li><a href="https://voso.vn/thiet-bi-dien-nuoc-c157">Thiết bị điện nước</a></li>
                                            <li><a href="https://voso.vn/thiet-bi-khac-c158">Thiết bị khác</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="https://voso.vn/voucher-dich-vu-c167"><img src="https://image.voso.vn/users/vosoimage/images/0843ea11773508c2cfd78a0b24e9f4e1?t%5B0%5D=compress%3Alevel%3D100&accessToken=0b1ec5e80cd50455a6cdd888b4c4b923cf68f480d6787099accab03998d0d780" alt="icon" />Voucher - Dịch vụ <i class="fas fa-chevron-right"></i>
                                    <i class="fas fa-chevron-up c-alias-mobile__expand-sub"></i>
                                </a>
                                <div class="c-alias-sub">
                                    <div class="c-alias-sub__content">
                                        <ul>
                                            <li><a href="https://voso.vn/voucher-nha-hang-an-uong-c168">Voucher Nhà hàng - Ăn uống</a></li>
                                            <li><a href="https://voso.vn/voucher-spa-lam-dep-c169">Voucher Spa - Làm đẹp</a></li>
                                            <li><a href="https://voso.vn/dat-ve-may-bay-c170">Đặt vé máy bay</a></li>
                                            <li><a href="https://voso.vn/dat-phong-khach-san-c171">Đặt phòng khách sạn</a></li>
                                            <li><a href="https://voso.vn/dich-vu-y-te-bao-hiem-tai-chinh-c172">Dịch vụ Y Tế - Bảo Hiểm - Tài Chính</a></li>
                                            <li><a href="https://voso.vn/khoa-hoc-online-c173">Khóa học Online</a></li>
                                            <li><a href="https://voso.vn/the-cao-cac-loai-c174">Thẻ cào các loại</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="https://voso.vn/vat-lieu-xay-dung-c199"><img src="https://image.voso.vn/users/vosoimage/images/abc7e458e643eefe725ae7ec833ba932?t%5B0%5D=compress%3Alevel%3D100&accessToken=081507d8cfbb5663ba8f715a510f3fb582aa8ee733a326b6ff6cf80fd6122e8a" alt="icon" />Vật liệu xây dựng <i class="fas fa-chevron-right"></i>
                                    <i class="fas fa-chevron-up c-alias-mobile__expand-sub"></i>
                                </a>
                                <div class="c-alias-sub">
                                    <div class="c-alias-sub__content">
                                        <ul>
                                            <li><a href="https://voso.vn/thep-tam-c202">Thép tấm</a></li>
                                            <li><a href="https://voso.vn/thep-tron-c205">Thép tròn</a></li>
                                            <li><a href="https://voso.vn/thep-hinh-c208">Thép hình</a></li>
                                            <li><a href="https://voso.vn/thep-ong-c217">Thép ống</a></li>
                                            <li><a href="https://voso.vn/ong-nhua-c220">Ống nhựa</a></li>
                                            <li><a href="https://voso.vn/nhom-tam-c223">Nhôm tấm</a></li>
                                            <li><a href="https://voso.vn/cua-thep-c214">Cửa thép</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="https://voso.vn/vat-tu-nong-nghiep-c237"><img src="https://image.voso.vn/users/vosoimage/images/51c98f8f3d45360e22d1558aa9b8fe21?t%5B0%5D=compress%3Alevel%3D100&accessToken=bfe6ed9652eecfae9289f30a8583dda809acd2b3894f0c23daab4e3a7213100b" alt="icon" />Vật tư nông nghiệp <i class="fas fa-chevron-right"></i>
                                    <i class="fas fa-chevron-up c-alias-mobile__expand-sub"></i>
                                </a>
                                <div class="c-alias-sub">
                                    <div class="c-alias-sub__content">
                                        <ul>
                                            <li><a href="https://voso.vn/giong-cay-trong-c238">Giống cây trồng</a></li>
                                            <li><a href="https://voso.vn/giong-vat-nuoi-c239">Giống vật nuôi</a></li>
                                            <li><a href="https://voso.vn/phan-bon-huu-co-va-phan-bon-khac-c240">Phân bón hữu cơ và phân bón khác</a></li>
                                            <li><a href="https://voso.vn/thuc-an-chan-nuoi-thuy-san-c241">Thức ăn chăn nuôi - thủy sản</a></li>
                                            <li><a href="https://voso.vn/thuoc-bao-ve-thuc-vat-c242">Thuốc bảo vệ thực vật</a></li>
                                            <li><a href="https://voso.vn/thuoc-thu-y-c243">Thuốc thú y</a></li>
                                            <li><a href="https://voso.vn/che-pham-sinh-hoc-c244">Chế phẩm sinh học</a></li>
                                            <li><a href="https://voso.vn/chat-xu-ly-cai-tao-moi-truong-c245">Chất xử lý - Cải tạo môi trường</a></li>
                                            <li><a href="https://voso.vn/nong-cu-nong-nghiep-c246">Nông cụ nông nghiêp</a></li>
                                            <li><a href="https://voso.vn/vat-tu-nong-nghiep-khac-c247">Vật tư nông nghiệp khác</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <button type="button" class="c-menusecond-expand js-menusecond-expand" style="display: none;"><i class="fa fa-bars"></i>Menu</button>
                <div class="b__menu--right ml-auto">
                    <ul>
                        <li><a href="https://voso.vn/mall">THỜI TRANG nam, nữ</a></li>
                        <li><a href="https://voso.vn/ocop">Sức khỏe - làm đẹp</a></li>
                        <li><a href="https://vtbay.com.vn/">Mẹ và bé</a></li>
                        <li><a href="https://voso.vn/dac-san-vung-mien-c137">Thiết bị điện tử</a></li>
                        <li><a href="https://voso.vn/bach-hoa-online.html">Phụ kiện điện thoại</a></li>
                        <li><a href="https://voso.vn/gian-hang-viet">Mỹ phẩm</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>