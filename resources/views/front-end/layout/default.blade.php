

<!DOCTYPE html>
<html lang="vi-VN" ng-app="app">
<head>
    
	<link rel="shortcut icon" href="{{asset('uploads/images/systems/'.$system->shortcut_logo)}}" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/toastr.min.css')}}">
	
@yield('head')
</head>
<body class="pushmenu-push 
@yield('body-name') " ng-controller="auth" ng-cloak>
@include('front-end.layout.header')

@yield('content')
@include('front-end.layout.footer')
@yield('js')
<script src="/js/order.js?v=1603338118"></script>
<script src="/js/browse.js?v=1603338118"></script>
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
<script type="text/javascript">
    $("div.note").delay(3000).slideUp();

    function locationUrl(){
    	var url = location.href;
    	
    	$('input[name="url"]').val(url);
    }
    var url = location.href;
    
    $('a.sidebar[href="'+url+'"]').parent().addClass('active');
</script>
<script type="text/javascript" src="{{asset('js/toastr.min.js')}}"></script>
@if( Session::has('flash_message'))
    <script>
        var level = $(".flash_message").attr('level');
        var message = $(".flash_message").text();
        if(level == 'success'){
            toastr.success(message);
        }
        else{
            toastr.warning(message);
        }
        // console.log(flash_message);
    </script>
@endif
@if( count($errors) > 0)
    <script>
        $(".error").each(function(){
            toastr.warning($(this).text());
        });
    </script>
@endif
</body>
</html>
