<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="theme-color" content="#ffffff"/>
    <title> أب دريم - أكبر موقع ألعاب وتطبيقات مهكرة </title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="http://userscripts.org/scripts/show/119910"></script>
    <link href="{{asset(url('front/templatemo_style.css'))}}" rel="stylesheet" type="text/css"/>
</head>
<body style="direction: rtl;overflow-x:hidden;background-color:#9561e2">
<div class="desk">
    <div class="nav-container">
        <nav style="background-color: #8e44ad"
             class="navbar navbar-expand-lg  navbar-dark bg-custom d-flex fixed-top justify-content-between nav-color">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" style="cursor: pointer" onclick="gotos(0)">الرئيسية <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" style="cursor: pointer" onclick="gotos(2500)">من نحن</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " style="cursor: pointer" onclick="gotos(3500)">تواصل معنا</a>
                    </li>
                </ul>
                <form action="{{ url('appdream/search') }}" METHOD="" class="form-inline my-2 my-lg-0" a method="post">
                    {{ csrf_field() }}
                    <input
                        style="border-radius: 20px;border-width: 0px;text-indent:40px;width: 400px;margin: auto;background-color: white"
                        class="form-control mr-sm-2" name="input" type="search" placeholder="بحث">
                    <button class="btn btn-outline-success my-2 my-sm-0 " type="submit">بحث</button>
                </form>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            {{--            <h6 style="color: white;font-family: 'Amiri', serif;z-index: 2">App Dream</h6>--}}
            <h6 style="width: 40px;height: 40px;margin-right: 900px;margin-left:10px;margin-top:25px; color: white;font-size: 20px">{{$whats[0]->text}}</h6>

            <div style="width: 40px;height: 40px; color: white;margin-top:10px;font-size: 30px" class="fa fa-whatsapp">

            </div>
            <h6 style="width: 40px;height: 40px;margin-left:10px;margin-top:25px; color: white;font-size: 20px">{{$phone[0]->text}}</h6>

            <div style="width: 40px;height: 40px; color: white;margin-top:10px;font-size: 30px" class="fa fa-phone">

            </div>
        </nav>

    </div>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('assets/img/s3.jpg')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 embed-responsive" src="{{asset('assets/img/s1.jpg')}}"
                     alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100"
                     src="{{asset('assets/img/s2.jpg')}}" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="apps row center" style="padding: 50px;padding-bottom:20px;margin-top: 0px;background-color: white">
        @foreach($rows as $row)
            <div class="card col-lg-3 col-sm-10 col-md-10 shadow p-3 mb-5" onclick="openDetails({{$row->id}})"
                 style="border-radius: 30px">
                <img class="card-img-top" src="{{$row->image}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title" style="color: #8e44ad">{{$row->name}}</h5>
                    <p class="card-text"
                       style="height: 50px;text-overflow: ellipsis;overflow: hidden;">{{$row->desc}}</p>
                    <button class="btn1" style="background-color: #8e44ad"><i class="fa fa-download"></i> تثبيت</button>
                </div>
            </div>
        @endforeach
        <div style="margin-right: 450px;margin-top: 50px">
            {{$rows->links()}}
        </div>
    </div>
    @if(session()->has('message'))
        <script>
            setTimeout(function () {
                scrollTo(0, 1000)

            }, 1000)
        </script>
        <div class="alert alert-success" style="text-align: right; margin: 50px 50px 50px 50px;">
            {{ session()->get('message') }}
        </div>
    @endif
    <div
        style="background-image: url({{asset('assets/img/b2.jpg')}});background-size: 100% 100%;background-repeat:no-repeat;height: 500px;z-index: 1;width: 100%">
        <div style="z-index: 10;background-color: rgba(0,0,0,.7);height: 500px;width: 100%">

            <div class="col-2 " style="color: white">
                <h3 class="about"
                >{{$about[0]->text}}</h3>
            </div>
            <div
                style="border-radius:40px;width: 90%;padding: 50px;  background-color: #8e44ad;margin: 5%;margin-top: 200px;">
                <form action="{{url('appdream/messages')}}" method="POST">
                    @csrf
                    <div class="row contact">
                        <div class="col-lg-4 col-sm-10 col-md-10">
                            <input type="text" name="name" placeholder="الاسم بالكامل"><br/>
                            <input type="text" name="phone" placeholder="رقم الهاتف"><br/>
                            <input type="text" name="email" placeholder="البريد الالكتروني"><br/>
                        </div>
                        <div class="col-lg-4 col-sm-10 col-md-10">
                            <textarea name="message" placeholder="الرسالة"></textarea><br/>
                            <input type="submit"
                                   style="background-color: transparent;border-width: 3px;border-color: white; ;color: white"><br/>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<h3 style="margin: 1vw;color:white;text-align: center">حمل تطبيقاتك المفضلة </h3>

<div class="mobiles">
    <div class="acclist" style="display: none;height: 100vh;background-color: rgba(0,0,0,0.62);text-align: center;">
        <div style="vertical-align:middle; margin-top: 5vh">
            <div style="background-color: #9561e2;margin: 5vw;text-align: right;height: 10vw;width: 90vw;margin-bottom: 0">
                <h2 style="text-align:center;font-size: 5vw ;color: white;font-weight: bold">الاسم</h2>
            </div>
            <div style="background-color: rgba(0,0,0,0.62);margin: 5vw;text-align: right;height: 10vw;width: 90vw;margin-top: 0">
                <h2 style="padding:0.5vw;height:100%;text-align:center;font-size: 5vw ;color: white;font-weight: bold">{{auth()->user()->name}}</h2>
            </div>

            <div style="background-color: #9561e2;margin: 5vw;text-align: right;height: 10vw;width: 90vw;margin-bottom: 0">
                <h2 style="text-align:center;font-size: 5vw ;color: white;font-weight: bold">الجوال</h2>
            </div>
            <div style="background-color: rgba(0,0,0,0.62);margin: 5vw;text-align: right;height: 10vw;width: 90vw;margin-top: 0">
                <h2 style="padding:0.5vw;height:100%;text-align:center;font-size: 5vw ;color: white;font-weight: bold">ا{{auth()->user()->phone}}</h2>
            </div>

            <div style="background-color: #9561e2;margin: 5vw;text-align: right;height: 10vw;width: 90vw;margin-bottom: 0">
                <h2 style="text-align:center;font-size: 5vw ;color: white;font-weight: bold">البريد الالكتروني</h2>
            </div>
            <div style="background-color: rgba(0,0,0,0.62);margin: 5vw;text-align: right;height: 10vw;width: 90vw;margin-top: 0">
                <h2 style="padding:0.5vw;height:100%;text-align:center;font-size: 5vw ;color: white;font-weight: bold">{{auth()->user()->email}}</h2>
            </div>

            <div style="background-color: #9561e2;margin: 5vw;text-align: right;height: 10vw;width: 90vw;margin-bottom: 0">
                <h2 style="text-align:center;font-size: 5vw ;color: white;font-weight: bold">تاريخ الاشتراك</h2>
            </div>
            <div style="background-color: rgba(0,0,0,0.62);margin: 5vw;text-align: right;height: 10vw;width: 90vw;margin-top: 0">
                <h2 style="padding:0.5vw;height:100%;text-align:center;font-size: 5vw ;color: white;font-weight: bold">{{auth()->user()->created_at}}</h2>
            </div>
        </div>
    </div>
    <div class = "applist">
        <div  style="background-color: rgba(0,0,0,0.63);width: 100vw;height:100%;display: flex;flex-direction: column">
            @foreach($rows as $row)
                <div
                    style="text-align: right;width: 96vw;height: 25vw;border-radius: 5vw;background-color: rgba(0,0,0,0.87);margin: 2vw;display: flex; flex-direction: row;">
                    <img src="{{$row->image}}" alt="fdf" style="margin:1vw;border-radius: 5vw;height: 23vw;width: 23vw"/>
                    <div
                        style="display: flex; flex-direction: column;margin-top:2vw;margin-right:2vw;height:30vw;width: 100vw">
                        <h5 style="color: #9561e2;font-size: 5vw">{{$row->name}}</h5>
                        <div
                            style="margin-top:5vw;display: flex;flex-direction: row;justify-content: space-between;width:64vw;">
                            <h6 style="color: white; font-size: 3vw; ">{{$row->desc}}</h6>
                            <div
                                style="color: white;font-size:4vw;width: 20vw;margin-left:0.5vw;text-align:center;height: 7vw;background-color:  #9561e2;border-radius: 3.5vw;float: left">
                                <a style="color: white" target="_blank" href="{{$row->file}}"> تثبيت</a></div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div style="margin:auto;margin-top: 50px ;margin-bottom: 20vw">
                {{$rows->links()}}
            </div>
{{--            <div--}}
{{--                style="border-radius:40px;width: 90%;padding: 50px;  background-color: rgba(11,9,7,0.48);margin: 5%;margin-top: 20px;">--}}
{{--                <form action="{{url('appdream/messages')}}" method="POST">--}}
{{--                    @csrf--}}
{{--                    <div class="row contact">--}}
{{--                        <div class="col-lg-4 col-sm-10 col-md-10">--}}
{{--                            <input type="text" name="name" placeholder="الاسم بالكامل"><br/>--}}
{{--                            <input type="text" name="phone" placeholder="رقم الهاتف"><br/>--}}
{{--                            <input type="text" name="email" placeholder="البريد الالكتروني"><br/>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-sm-10 col-md-10">--}}
{{--                            <textarea name="message" placeholder="الرسالة"></textarea><br/>--}}
{{--                            <input type="submit"--}}
{{--                                   style="background-color: transparent;border-width: 3px;border-color: white; ;color: white"><br/>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}

        </div>
    </div>


    <div class="nav">
        <a id = "account" >الحساب</a>
        <a id = "apps" href="#" style = " background-color: #4CAF50;">التطبيفات</a>

    </div>
</div>

</body>
<style>
    @media (min-width: 961px) {


        .about {
            width: 500px;
            margin: 50px;
            padding: 50px;
        }

    }
    
    @media only screen and ( min-resolution: 165dpi) and (max-resolution: 168dpi), only screen and (min-resolution: 155dpi) and (max-resolution: 160dpi), only screen and (min-resolution: 134dpi) and (max-resolution: 144dpi), only screen and (min-resolution: 120dpi) and (max-resolution: 130dpi), only screen and (max-resolution: 116dpi) {

        .contact {
            text-align: center;
            padding: 40px;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.27);
        }

        .mobiles {
            display: none;
        }

        .contact h2 {
            text-align: center;
            margin: auto;
            color: #8e44ad;
        }

        .contact input {
            border: 0px solid gray;
            border-radius: 2px;
            text-indent: 20px;
            width: 100%;
            height: 50px;
            margin: 20px;
        }

        input:focus {
            outline-width: 0;
        }

        textarea {
            height: 140px;
            text-indent: 20px;
            margin: 20px;
            width: 100%;
            border: none;
        }

        textarea:focus {
            outline-width: 0;

        }

        .about {
            color: white;
            font-size: 20px;
            padding: 10px;
            width: 900px;
            height: 400px;
            overflow-y: hidden;
            text-align: center;
            margin: 150px;
            padding-top: 60px;
            line-height: 30px;
        }

        .desk {
            visibility: visible;

        }

        .mobiles {
            /*visibility: hidden;*/d

        }

    }

    @media only screen and (min-resolution: 117dpi) and (max-resolution: 119dpi), only screen and (min-resolution: 131dpi) and (max-resolution: 133dpi), only screen and (min-resolution: 145dpi) and (max-resolution: 154dpi), only screen and (min-resolution: 162dpi) and (max-resolution: 164dpi), only screen and (min-resolution: 169dpi) {

        .nav {
            overflow: hidden;
            background-color: #333;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .nav a {
            float: left;
            display: block;
            width:50vw;
            color: #f2f2f2;
            text-align: center;
            padding: 3vw 4vw;
            text-decoration: none;
            font-size: 5vw;

        }



        .nav-container {
            display: none;
        }
        .desk {
            display: none;
        }

        html, body {
            overflow: initial !important;
            overflow-y: scroll;
        }

        .mobiles {
            display: flex;
            position: absolute;
            background-position:center;
            /*height: 2000px;*/
            float: top;
            height: 100%;
            margin-top: 0;
            background-image: url("{{asset('assets/img/b.jpg')}}");
            background-repeat: no-repeat;
            background-size: 10vh;
            width: 100vw;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            background-color: white;
        }

        .contact {
            text-align: center;
            padding: 40px;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.27);
        }

        .contact h2 {
            text-align: center;
            margin: auto;
            color: #8e44ad;
        }

        .contact input {
            border: 0px solid gray;
            border-radius: 2px;
            text-indent: 20px;
            width: 100%;
            height: 50px;
            margin: 20px;
        }

        input:focus {
            outline-width: 0;
        }

        textarea {
            height: 140px;
            text-indent: 20px;
            margin: 20px;
            width: 100%;
            border: none;
        }

        textarea:focus {
            outline-width: 0;

        }

        body {
            text-align: start;
            padding-top: 1vw;
            direction: rtl;
            overflow-x: hidden;
            background-color: black;
        }

    }
</style>
<script>
    function openDetails(id) {
        window.location.href = "{{url('appdream/appdetails')}}" + '/' + id;
    }

    function gotos(y) {
        scrollTo(0, y);
    }

    $('.carousel').carousel({
        pause: "false"
    });

    $(function () {
        $("body").niceScroll();
    });
    $('#account').click(function () {
        $('.applist').css({"display":"none"});
        $('.acclist').css({"display":"flex","flex-direction":"column"});
        $('#account').css({"background-color":"green"});
        $('#apps').css({"background-color":"black"});
    });

    $('#apps').click(function () {
        $('.applist').css({"display":"flex"});
        $('.acclist').css({"display":"none"});
        $('.mobiles').css({"background-size":"none"});
        $('#account').css({"background-color":"black"});
        $('#apps').css({"background-color":"green"});
    });
</script>
</html>
