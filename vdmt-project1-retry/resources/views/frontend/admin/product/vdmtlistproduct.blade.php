@extends('layouts.master')
@section('title','Product')

@section('content-body')
    <div class="car">
        <div class="card-header d-flex">
            <h3>Products</h3>
            <a href="/admin/list-product/create" class="btn btn-success d-inline-block m-1">Them moi </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Ảnh</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Mã loại</th>
                        <th>Trạng thái</th>
                        <th>Ngày nhập</th>
                        <th>Ngày sửa</th>   
                        <th>Function</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vdmtproducts as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->vdmtproductid}}</td>
                            <td>{{$item->vdmtproductname}}</td>
                            <td><img src="{{ asset($item->vdmtproductimage) }}" class="card-img-top width='50px'; heigh='50px'" alt="{{$item->vdmtproductimage}}"></td>
                            <td>{{$item->vdmtproductquantity}}</td>
                            <td>{{$item->vdmtproductprice}}</td>
                            <td>{{$item->vdmttypeproductid}}</td>
                            <td>{{$item->vdmtproductstatus}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>{{$item->updated_at	}}</td>
                            <td>
                                <a href="/admin/list-product/edit/{{$item->id}}" class="btn btn-primary">Edit</a>
                                <a href="/admin/list-product/delete/{{$item->id}}" class="btn btn-danger"onclick="return confirm('Bạn muốn xóa không?');">Xóa </a>
                            </td>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
@endsection