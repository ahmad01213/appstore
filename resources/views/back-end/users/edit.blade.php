@extends('layouts.admin');
@section('content')
    <div class="card">
        <div class="card-header">
            <h5 class="title">إضافة مستخدم</h5>
        </div>
        <div class="card-body" style="width: 500px">
            <form action="{{url('admin/users/update',['id'=>$row->id])}}"  method="POST" >
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label style="font-size: 17px">الاسم</label>
                            <input type="text" value="{{$row->name}}" name="name" class="form-control" placeholder="الاسم"  >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label style="font-size: 17px">الايميل</label>
                            <input type="text" value="{{$row->email}}" name="email" class="form-control" placeholder="الايميل">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label style="font-size: 17px">الجوال</label>
                            <input type="number" name="phone" value="{{$row->phone}}" class="form-control" placeholder="الجوال"  >
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label style="font-size: 17px">كلمة السر</label>
                            <input type="text" name="password"  class="form-control" placeholder="كلمة السر"  >
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary order-delete" style="margin-top: 40px; width: 300px; margin: 30px">حفظ </button>

            </form>
        </div>
    </div>
@endsection
