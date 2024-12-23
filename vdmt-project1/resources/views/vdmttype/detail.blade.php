@extends('layoutsadmin.master')
@section('title','Home Admin')

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
                            <td>{{$item->id}}</td>
                            <td>{{$item->vdmttypeproductid}}</td>
                            <td>{{$item->vdmttypeproductname}}</td>
                            <td>{{$item->vdmttypeproductstatus}}</td>
                            <td>{{$item->created_at}}</td>
                            <td>{{$item->updated_at	}}</td>
                            <td>
                                <button type="submit" class="btn btn-secondary">Edit</button>
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection