@extends('layouts.admin');
@section('content')
    <div class="flex-column" style="margin-right: 300px;margin-top: 100px;margin-left: 50px">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> الأعضاء الجدد</h4>
                <a class="btn btn-outline-primary order-delete"
                   href="{{url('admin/users/create')}}" id="2"
                   style="margin-right: 10px; height: 40px;font-size: 17px; ">
                    إضافة +
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <tr>
                            <th class="text-center">
                                id
                            </th>
                            <th class="text-center">
                            </th>
                            <th class="text-center">
                                الإسم
                            </th>
                            <th class="text-center">
                            </th>
                            <th class="text-center">
                                الايميل
                            </th>
                            <th class="text-center">
                            </th>
                            <th class="text-center text-center">
                                الهاتف
                            </th>
                            <th class="text-center">
                            </th>
                            <th class="text-center" style="font-size: 20px">
                                تاريخ
                            </th>
                            <th class="text-center">
                            </th>
                            <th class="text-center">
                                إجراء
                            </th>
                            <th class="text-center">
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $row)
                            <tr>
                                <td class="text-center">
                                    {{$row->id}}
                                </td>
                                <td class="text-center">
                                </td>
                                <td class="text-center">
                                    {{$row->name}}
                                </td>
                                <th class="text-center">
                                </th>
                                <td class="text-center">
                                    {{$row->email}}
                                </td>
                                <th class="text-center">
                                </th>
                                <td class="text-center">
                                    {{$row->phone}}
                                </td>
                                <th class="text-center">
                                </th>
                                <td class="text-center">
                                    {{$row->created_at}}
                                </td>
                                <th class="text-center">
                                </th>
                                <td align="center" tabindex="0" class="sorting_1"
                                    style="text-align: center;width: 200px;">
                                    <div class="container" style=" display: flex;justify-content:center;">
                                        <form action="{{ url('admin/users/delete' , ['id' => $row->id]) }}"
                                              method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-danger order-delete"
                                                    style="margin-right: 10px; height: 30px;font-size: 12px; ">
                                                حذف
                                            </button>
                                        </form>

                                        <a class="btn btn-primary order-delete"
                                           href="{{url('admin/users/edit',['id'=>$row->id])}}"
                                           style="margin-right: 10px; height: 35px;font-size: 12px; ">
                                            تعديل
                                        </a>
                                    </div>
                                </td>
                                <td class="text-center">
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="flex-column" style="margin-right: 300px;margin-top: 100px;margin-left: 50px">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> أحدث التطبيقات</h4>
                <a class="btn btn-outline-primary order-delete"
                   href="{{url('admin/apps/create')}}" id="2"
                   style="margin-right: 10px; height: 40px;font-size: 17px; ">
                    إضافة +
                </a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <tr>
                            <th class="text-center">
                                id
                            </th>
                            <th class="text-center">
                            </th>
                            <th class="text-center">
                                الإسم
                            </th>
                            <th class="text-center">
                            </th>
                            <th class="text-center">
                                الوصف
                            </th>
                            <th class="text-center">
                            </th>
                            <th class="text-center text-center">
                                صورة
                            </th>
                            <th class="text-center">
                            </th>
                            <th class="text-center" style="font-size: 20px">
                                تاريخ
                            </th>
                            <th class="text-center">
                            </th>
                            <th class="text-center">
                                إجراء
                            </th>
                            <th class="text-center">
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($products as $row)
                            <tr>
                                <td class="text-center">
                                    {{$row->id}}
                                </td>
                                <td class="text-center">
                                </td>
                                <td class="text-center">
                                    {{$row->name}}
                                </td>
                                <th class="text-center">
                                </th>
                                <td class="text-center">
                                    {{$row->desc}}
                                </td>
                                <th class="text-center">
                                </th>
                                <td tabindex="0" class="sorting_1"><img src="{{$row->image}}" alt="Avatar"
                                                                        style="height: 50px;width: 50px;border-radius: 25px">
                                </td>
                                <th class="text-center">
                                </th>
                                <td class="text-center">
                                    {{$row->created_at}}
                                </td>
                                <th class="text-center">
                                </th>
                                <td align="center" tabindex="0" class="sorting_1"
                                    style="text-align: center;width: 200px;">
                                    <div class="container" style=" display: flex;justify-content:center;">
                                        <form action="{{ url('admin/apps/delete' , ['id' => $row->id]) }}"
                                              method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-danger order-delete"
                                                    style="margin-right: 10px; height: 30px;font-size: 12px; ">
                                                حذف
                                            </button>
                                        </form>
                                        {{--                                        <a class="btn btn-danger order-delete" href="{{ route('products.destroy', ['user'=>$row->id]) }}" id="2" style="margin-right: 10px; height: 35px;font-size: 12px; ">--}}
                                        {{--                                            حذف--}}
                                        {{--                                        </a>--}}
                                        <a class="btn btn-primary order-delete"
                                           href="{{url('admin/apps/edit',['id'=>$row->id])}}"
                                           style="margin-right: 10px; height: 35px;font-size: 12px; ">
                                            تعديل
                                        </a>
                                        <a class="btn btn-success order-delete"
                                           href="{{$row->file}}" target="_blank"
                                           style="margin-right: 10px; height: 35px;font-size: 12px; ">
                                            تحميل
                                        </a>
                                    </div>
                                </td>
                                <td class="text-center">
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection


