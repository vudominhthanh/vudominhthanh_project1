@extends('layouts.master')
@section('title','Type product')

@section('content-body')
    <div class="car">
        <div class="card-header d-flex">
            <h3>Products type</h3>
            <a href="/home/admin/list-type-product/create" class="btn btn-success d-inline-block m-1">Them moi </a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Mã loại</th>
                        <th>Tên loại</th>
                        <th>Trạng thái</th>
                        <th>Ngày nhập</th>
                        <th>Ngày sửa</th>
                        <th>Function</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vdmttypeproducts as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->vdmttypeproductid}}</td>
                            <td>{{$item->vdmttypeproductname}}</td>
                            <td>{{$item->vdmttypeproductstatus}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>{{$item->updated_at	}}</td>
                            <td>
                                <a href="/home/admin/list-type-product/edit/{{$item->id}}" class="btn btn-primary">Edit</a>
                                <a href="/home/admin/list-type-product/delete/{{$item->id}}" class="btn btn-danger"onclick="return confirm('Bạn muốn xóa không?');">Xóa </a>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
@endsection