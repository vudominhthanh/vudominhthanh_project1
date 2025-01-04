@extends('layouts.master')
@section('title','Bills')

@section('content-body')
    <div class="car">
        <div class="card-header d-flex">
            <h3>Bill details</h3>  
            <a href="/admin/bill/details/create" class="btn btn-success d-inline-block m-1">Them moi</a>
            <a href="{{route('admin.bill-list')}}" class="btn btn-secondary"><i class="fas fa-arrow-left icon"></i>Quay lai</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã đơn</th>
                        <th>Mã sản phẩm</th>
                        <th>Số lượng mua</th>
                        <th>Đơn giá</th>
                        <th>Thành tiền</th>
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
                            <td>{{$item->vdmtproductid}}</td>
                            <td>{{$item->vdmtquantity}}</td>
                            <td>{{$item->vdmtprice}}</td>
                            <td>{{$item->vdmttotal}}</td>
                            <td>{{$item->vdmtdetailstatus}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>{{$item->updated_at	}}</td>
                            <td>
                                <a href="/admin/bill/delete/{{$item->id}}" class="btn btn-danger"onclick="return confirm('Bạn muốn xóa không?');">Xóa </a>
                            </td>  
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
@endsection