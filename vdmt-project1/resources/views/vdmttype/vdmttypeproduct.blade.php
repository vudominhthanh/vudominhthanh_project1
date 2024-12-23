@extends('layoutsadmin.master')
@section('title','Type Product List')

@push('styles') 
    <link rel="stylesheet" href="{{ asset('appcssadmin/homeadmin.css') }}"> 
@endpush

@section('content')
    <div class="car">
        <div class="card-header">
            <h3>Products type</h3>
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
                                <a href="/home/admin/vdmttypeproduct/edit/{{$item->id}}" class="btn btn-primary">Edit</a>
                                <button type="submit" class="btn btn-secondary">Detail</button>
                                <a href="/home/admin/vdmttypeproduct/delete/{{$item->idid}}" class="btn btn-danger"onclick="return confirm('Bạn muốn xóa không?');">Xóa </a>
                    @endforeach 
                </tbody>
            </table>
        </div>
    </div>
@endsection