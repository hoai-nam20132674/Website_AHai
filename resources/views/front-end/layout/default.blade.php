

<!DOCTYPE html>
<html lang="vi-VN" ng-app="app">
<head>
	<link rel="shortcut icon" href="" />
@yield('head')
</head>
<body class="pushmenu-push 
body-home-page " ng-controller="auth" ng-cloak>
@include('front-end.layout.header')

@yield('content')
@include('front-end.layout.footer')
@yield('js')
</body>
</html>
