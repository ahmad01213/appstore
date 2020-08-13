@extends('layouts.admin')
@section('content')

    @if(session()->has('message'))
        <div  class="alert alert-success"  style="text-align: right; margin: 50px 50px 50px 50px;">
            {{ session()->get('message') }}
        </div>
    @endif



    <div class="flex-column" style="margin-right: 300px;margin-top: 100px;margin-left: 50px;min-width: 500px">
        <div class="card">

            <div class="card-body">
                <div class="table-responsive">
                    <div class="card-header text-center">
                        إعدادات
                    </div>
                    <div class="card-body">
                        <form action="{{url('admin/settingsupdate')}}" method="POST" >
                            @csrf
                            <div class="form-group" >
                                <label for="exampleInputEmail1">من نحن</label>
                                <textarea type="text"  name="abouttext" style="height: 200px;text-align: right; " class="form-control" id="exampleInputEmail1"  placeholder="اكتب هنا ">{{$about[0]->text}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">رقم التواصل عبر الواتس اب</label>
                                <input type="number" name="whats" class="form-control" id="exampleInputPassword1" value="{{$whats[0]->text}}"  placeholder="اكتب الرقم">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">رقم التواصل عبر الاتصال</label>
                                <input type="number" name="phone" class="form-control" id="exampleInputPassword1" value="{{$phone[0]->text}}"  placeholder="اكتب الرقم">
                            </div>

                            <button type="submit" class="btn btn-primary">حفظ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
