@extends('layouts.admin');
@section('content')
    <div class="flex-column"  style="margin-right: 300px;margin-top: 100px;margin-left: 50px">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> الرسائل</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                        <tr><th class="text-center">
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
                                الإيميل
                            </th>
                            <th class="text-center">
                            </th>
                            <th class="text-center text-center">
                                الهاتف
                            </th>
                            <th class="text-center">
                            </th>
                            <th class="text-center" style="font-size: 20px">
                                الرسالة
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
                        @foreach($rows as $row)
                            <tr>
                            <td class="text-center">
                                {{$row->id}}
                            </td>
                            <th class="text-center">
                            </th>
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
                                {{$row->message}}
                            </td>
                            <td class="text-center">
                            </td>
                            <td align="center" tabindex="0" class="sorting_1"
                                style="text-align: center;width: 200px;">
                                <div class="container" style=" display: flex;justify-content:center;">

                                    <form action="{{url('admin/messages/delete',['id'=>$row->id])}}"
                                          method="post">
                                        {{ csrf_field() }}
                                        {{ method_field('delete') }}
                                        <button type="submit" class="btn btn-danger order-delete"
                                                style="margin-right: 10px; height: 35px;font-size: 12px; ">
                                            حذف
                                        </button>
                                    </form>
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
