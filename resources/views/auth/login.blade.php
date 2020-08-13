
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    {{--    <link rel="stylesheet" href="style.css">--}}
    <style>
        @import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
        body{
            margin: 0;
            width: 100%;
            height: 100%;
            padding: 0;
            font-family: sans-serif;
            background-color: black;
            background-image: url("{{asset('assets/img/b.jpg')}}") ;
            object-fit: cover;
            background-repeat: no-repeat;
            background-size: 2000px ;

        }
        .login-box{
            width: 280px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            color: white;
        }
        .login-box h1{
            float: left;
            font-size: 40px;
            border-bottom: 6px solid #ffffff;
            margin-bottom: 50px;
            padding: 13px 0;
        }
        .textbox{
            width: 100%;
            overflow: hidden;
            font-size: 20px;
            padding: 8px 0;
            margin: 8px 0;
            border-bottom: 1px solid #ffffff;
        }
        .textbox i{
            width: 26px;
            float: left;
            text-align: center;
            margin-top: 30px;
        }
        .textbox input{
            border: none;
            outline: none;
            background: none;
            color: white;
            font-size: 18px;
            width: 80%;
            float: left;
            margin: 0 10px;
            margin-top: 30px;
        }
        .btn{
            width: 100%;
            background: none;
            border: 2px solid #ffffff;
            color: white;
            padding: 5px;
            font-size: 18px;
            cursor: pointer;
            margin: 12px 0;
        }


        @media only screen and (max-width: 600px) {
            body{
                height: 1000px;
                overflow-y: hidden;
            }

        }
    </style>
</head>
<body style=" background-size:cover;">
<div class="login-box" style="border-radius: 20px;background-color: rgba(0,0,0,.7);height: 400px;width: 350px;">
    <form method="POST" action="{{ route('loginadmin') }}" id="login-form" autocomplete="off">
        @csrf
        <div class="login-box">
            <h3 style="float: right;border-color: #ffffff">تسجيل الدخول</h3>
            <div class="textbox">
                <i class="fas fa-user" style="float: right"></i>
                <input type="text" name="email" class="form-control" placeholder="البريد الإلكتروني" style="float: right;text-align: right">
            </div>
            <div class="textbox">
                <i class="fas fa-lock" style="float: right"></i>
                <input type="password" name="password"  style="float: right;text-align: right" class="form-control" placeholder="كلمة المرور">
            </div>
            <input type="submit" class="btn" value="دخول">
        </div>
    </form>
</div>
</body>
</html>
