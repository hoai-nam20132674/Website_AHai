

<!DOCTYPE html>
<html lang="vi-VN" ng-app="app">
<head>
	<link rel="shortcut icon" href="" />
	<link rel="stylesheet" type="text/css" href="{{asset('css/toastr.min.css')}}">
	<script type="text/javascript" src="{{asset('js/toastr.min.js')}}"></script>
@yield('head')
</head>
<body class="pushmenu-push 
body-home-page " ng-controller="auth" ng-cloak>
@include('front-end.layout.header')

@yield('content')
@include('front-end.layout.footer')
@yield('js')
<script type="text/javascript">
    $("div.note").delay(3000).slideUp();
</script>
</body>
</html>
