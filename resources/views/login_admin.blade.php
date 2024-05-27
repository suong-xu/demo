<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QL Login Admin</title>
    <meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
    Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <link rel="stylesheet" href="{{asset('backend/css/bootstrap.min.css')}}" >
    <link href="{{asset('backend/css/style.css')}}" rel='stylesheet' type='text/css'/>
    <link href="{{asset('backend/css/style-responsive.css')}}" rel="stylesheet"/>
    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('backend/css/font.css')}}" type="text/css"/>
    <link href="{{asset('backend/css/font-awesome.css')}}" rel="stylesheet">
    <style>
        .logo-container {
            text-align: center;
            margin-bottom: 20px;
            margin-top: 10px;
        }
        .logo {
            width: 100px;
            height: auto;
        }
		</style>
</head>
<body>    
        <div class="log-w3">
            <div class="w3layouts-main">
                <div class="logo-container">
                    <img src="{{asset('backend/images/logo.png')}}" alt="Logo" class="logo">
                </div>
				<h2>ĐĂNG NHẬP NGAY</h2>
                <?php
                    $message = Session()->get('message');
                    echo '<div style="color: red;text-align: center">',$message,'</div>';
                    Session()->put('message',null);
                ?>
                <form action="{{URL::to('admin-dashboard')}}" method="post">
                    {{ csrf_field() }}
                    <input type="text" class="ggg" name="admin_email" placeholder="Nhập MAIL" required="">
                    <input type="password" class="ggg" name="admin_password" id="admin_password" placeholder="Nhập PASSWORD" required="">
                    <span id="togglePassword" onclick="togglePasswordField()">
                        <i class="fa fa-eye"></i> Hiện mật khẩu
                    </span>
                    <span><input name="remember" type="checkbox" />Nhớ mật khẩu</span>
                    <h6><a href="#">Quên mật khẩu?</a></h6>
                    <div class="clearfix"></div>
                    <input type="submit" value="Đăng nhập" name="login">
                </form>
                <p>Chưa có tài khoản? <a href="registration.html">Tạo tài khoản</a></p>
            </div>
        </div>
    </div>
    <script src="{{asset('backend/js/jquery2.0.3.min.js')}}"></script>
    <script>
        function togglePasswordField() {
            var passwordField = document.getElementById('admin_password');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                document.getElementById('togglePassword').innerHTML = '<i class="fa fa-eye-slash"></i> Ẩn mật khẩu';
            } else {
                passwordField.type = 'password';
                document.getElementById('togglePassword').innerHTML = '<i class="fa fa-eye"></i> Hiện mật khẩu';
            }
        }
    </script>
</body>
</html>