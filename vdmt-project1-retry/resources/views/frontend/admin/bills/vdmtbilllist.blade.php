@extends('layouts.master')
@section('title','Bills')

@section('content-body')
    <div class="car">
        <div class="card-header d-flex">
            <h3>Bills</h3>  
            <a href="/admin/bill/create" class="btn btn-success d-inline-block m-1">Them moi</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã đơn</th>
                        <th>Mã khách</th>
                        <th>Tên khách</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Address</th>
                        <th>Total</th>
                        <th>Trạng thái</th>
                        <th>Ngày nhập</th>
                        <th>Ngày sửa</th>
                        <th>Function</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vdmtbills as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->vdmtbillid}}</td>
                            <td>{{$item->vdmtcusid}}</td>
                            <td>{{$item->vdmtcusname}}</td>
                            <td>{{$item->vmdtcusemail}}</td>
                            <td>{{$item->vdmtcusnumber}}</td>
                            <td>{{$item->vdmtcusaddress}}</td>
                            <td>{{$item->vdmtbilltotal}}</td>
                            <td>{{$item->vdmtbillstatus}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>{{$item->updated_at	}}</td>
                            <td>
                                <a href="/admin/bill/edit/{{$item->id}}" class="btn btn-primary">Edit</a>
                                <a href="/admin/bill/delete/{{$item->id}}" class="btn btn-danger"onclick="return confirm('Bạn muốn xóa không?');">Xóa </a>
                                <a href="/admin/bill/detail/{{$item->id}}"></a>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
@endsection