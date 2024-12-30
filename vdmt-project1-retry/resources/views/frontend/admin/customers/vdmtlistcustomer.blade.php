@extends('layouts.master')
@section('title','Customer')

@section('content-body')
    <div class="car">
        <div class="card-header d-flex">
            <h3>Customer</h3>
            <a href="/home/admin/customer/create" class="btn btn-success d-inline-block m-1">Them moi</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã khách</th>
                        <th>Tên khách</th>
                        <th>EmailEmail</th>
                        <th>Password</th>
                        <th>Phone number</th>
                        <th>Address</th>
                        <th>Trạng thái</th>
                        <th>Ngày nhập</th>
                        <th>Ngày sửa</th>
                        <th>Function</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vdmtcustomers as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->vdmtcusid}}</td>
                            <td>{{$item->vdmtcusname}}</td>
                            <td>{{$item->vdmtcusemail}}</td>
                            <td>{{$item->vdmtcuspassword}}</td>
                            <td>{{$item->vdmtcusnumber}}</td>
                            <td>{{$item->vdmtcusaddress}}</td>
                            <td>{{$item->vdmtcusstatus}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>{{$item->updated_at	}}</td>
                            <td>
                                <a href="/home/admin/customer/edit/{{$item->id}}" class="btn btn-primary">Edit</a>
                                <a href="/home/admin/customer/delete/{{$item->id}}" class="btn btn-danger"onclick="return confirm('Bạn muốn xóa không?');">Xóa </a>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
@endsection