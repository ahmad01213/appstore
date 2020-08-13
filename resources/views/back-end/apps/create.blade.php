@extends('layouts.admin');
@section('content')
    <style>
        .inputfile {
            width: 0.1px;
            height: 0.1px;
            opacity: 0;
            overflow: hidden;
            position: absolute;
            z-index: -1;
        }
        .inputfile + label {
            font-size: 1.25em;
            font-weight: 700;
            color: white;
            background-color: black;
            display: inline-block;
        }

        .inputfile:focus + label,
        .inputfile + label:hover {
            background-color: red;
        }
        .inputfile + label {
            cursor: pointer; /* "hand" cursor */
        }
        .inputfile:focus + label {
            outline: 1px dotted #000;
            outline: -webkit-focus-ring-color auto 5px;
        }
    </style>
<div class="card">
    <div class="card-header">
        <h5 class="title">إضافة مستخدم</h5>
    </div>
    <div class="card-body" style="width: 500px">
        <form action="{{url('admin/apps/store')}}"  method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="font-size: 17px">الاسم</label>
                        <input name="name" type="text" class="form-control" placeholder="الاسم"  >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label style="font-size: 17px;margin-top: 30px">الوصف</label>
                        <textarea name="desc" aria-label="الوصف" type="text" class="form-control" style="height: 400px;" placeholder="الوصف"></textarea>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group" >
                        <button class="btn-primary" style="font-size: 17px;margin-top: 30px">صورة</button>
                        <input name="image" type="file" class="form-control"   >
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <button class="label" style="font-size: 17px;margin-top: 30px">ملف التطبيف</button>
                        <input name="file"  type="file" class="form-control filestyle"   >
                    </div>
                </div>
            </div>



            <button type="submit" class="btn btn-primary order-delete" style="margin-top: 40px; width: 300px; margin: 30px">حفظ </button>

        </form>

        <br />
        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow=""
                 aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                0%
            </div>
        </div>
        <br />
        <div id="success">

        </div>
        <br />
    </div>
</div>

    <script>
        $(document).ready(function(){

            $('form').ajaxForm({
                beforeSend:function(){
                    $('#success').empty();
                },
                uploadProgress:function(event, position, total, percentComplete)
                {
                    $('.progress-bar').text(percentComplete + '%');
                    $('.progress-bar').css('width', percentComplete + '%');
                },
                success:function(data)
                {
                    if(data.errors)
                    {
                        $('.progress-bar').text('0%');
                        $('.progress-bar').css('width', '0%');
                        $('#success').html('<span class="text-danger"><b>'+data.errors+'</b></span>');
                    }
                    if(data.success)
                    {
                        $('.progress-bar').text('Uploaded');
                        $('.progress-bar').css('width', '100%');
                        $('#success').html('<span class="text-success"><b>'+data.success+'</b></span><br /><br />');
                        $('#success').append(data.image);
                    }
                }
            });

        });
    </script>
 @endsection
