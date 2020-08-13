<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title> أب دريم  - أكبر موقع ألعاب وتطبيقات مهكرة </title><meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link href="{{asset(url('front/templatemo_style.css'))}}" rel="stylesheet" type="text/css"/>
</head>
<body style="direction: rtl;overflow-x: hidden">
<div class="nav-container"  >
    <nav style="background-color: #8e44ad" class="navbar navbar-expand-lg  navbar-dark bg-custom d-flex fixed-top justify-content-between nav-color" >

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" style="cursor: pointer" href="{{url('appdream/home')}}">الرئيسية <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link" style="cursor: pointer" onclick="gotos(1300)">من نحن</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " style="cursor: pointer" onclick="gotos(1900)">تواصل معنا</a>
                </li>
            </ul>
            <form action="{{ url('appdream/search') }}" METHOD="" class="form-inline my-2 my-lg-0" a  method="post">
                {{ csrf_field() }}
                <input style="border-radius: 20px;border-width: 0px;text-indent:40px;width: 400px;margin: auto;background-color: white" class="form-control mr-sm-2"  name="input"  type="search" placeholder="بحث">
                <button  class="btn btn-outline-success my-2 my-sm-0 " type="submit">بحث</button>
            </form>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        {{--            <h6 style="color: white;font-family: 'Amiri', serif;z-index: 2">App Dream</h6>--}}
        <h6 style="width: 40px;height: 40px;margin-right: 900px;margin-left:10px;margin-top:25px; color: white;font-size: 20px">{{$whats[0]->text}}</h6>

        <div style="width: 40px;height: 40px; color: white;margin-top:10px;font-size: 30px" class="fa fa-whatsapp" >

        </div>
        <h6 style="width: 40px;height: 40px;margin-left:10px;margin-top:25px; color: white;font-size: 20px">{{$phone[0]->text}}</h6>

        <div style="width: 40px;height: 40px; color: white;margin-top:10px;font-size: 30px" class="fa fa-phone" >

        </div>
    </nav>

</div>
<div class="row   detail-row">

    <div class="col-8 center left-div">
        <h5 class="card-title text-right " style="margin:0 40px 40px 70px;font-size: 40px;color: #8e44ad;">{{$row->name}}</h5>

        <div class="container-fluid">
            <img class="d-block img-thumbnail w-100" height="600px" style="padding:50px;object-fit: fill;margin-bottom: 170px"
                 src="{{$row->image}}" >
        </div>
        <p class="text-right" style="margin: 30px 30px 30px 30px;font-size: 30px">{{$row->desc}}</p>
        <a class="btn1 center " style="border-radius: 20px" href="{{$row->file}}"><i class="fa fa-download"></i> تثبيت</a>            </div>
    </div>
<div style="background-image: url({{asset('assets/img/b2.jpg')}});background-size: 100% 100%;background-repeat:no-repeat;height: 500px;z-index: 1;width: 100%">
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
</body>
<style>


    .contact {
        text-align: center;
        padding: 40px;
        width: 100%;
    }

    .contact h2 {
        text-align: center;
        margin: auto;
        color: #8e44ad;
    }

    .contact input {
        border: 0px solid gray;
        border-radius: 5px;
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

    @media only screen and (max-width: 600px) {
        .nav-container {
            display: none;
        }

        .about {
            width: 500px;
            margin: 50px;
            padding: 50px;
        }
    }
</style>
<script>
    function openDetails(id) {
        window.location.href = "{{url('appdream/appdetails')}}"+'/'+id;
    }
    function gotos(y) {
        scrollTo(0,y)
    }
</script>
</html>
