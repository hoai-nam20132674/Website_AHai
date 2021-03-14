
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/login/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/login/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/login/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin/login/iofrm-theme3.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="http://brandio.io/envato/iofrm/html/images/logo-light.svg" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">

                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Trang thương mại điện tử </h3>
                        <p></p>
                        <div class="page-links">
                            <a href="#" class="active">Login</a><a href="#">Register</a>
                        </div>
                        
                        @if( count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        @if( Session::has('flash_message'))
                            <div class="alert alert-{{ Session::get('flash_level')}}">
                                {{ Session::get('flash_message')}}
                            </div>
                        @endif
                        <form action="{{URL::route('postLogin')}}" method="POST">
                            {{ csrf_field() }}
                            <input class="form-control" name="email" placeholder="E-mail Address" value="{{old('email')}}" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" value="{{old('password')}}" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Đăng nhập</button> <a href="#">Forget password?</a>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{asset('js/admin/login/jquery.min.js')}}"></script>
<script src="{{asset('js/admin/login/popper.min.js')}}"></script>
<script src="{{asset('js/admin/login/bootstrap.min.js')}}"></script>
<script src="{{asset('js/admin/login/main.js')}}"></script>
<script type="text/javascript">
    $("div.alert").delay(3000).slideUp();
</script>
</body>
</html>