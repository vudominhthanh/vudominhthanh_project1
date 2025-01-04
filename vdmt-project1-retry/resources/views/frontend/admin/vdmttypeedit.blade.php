@extends('layouts.master')
@section('title','Type product')

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        form {
            background-color: #ffffff;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 20px auto;
        }

        form div {
            margin-bottom: 10px;
        }

        form label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        form .radio-group {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }

        form .radio-group label {
            margin-left: 5px;
            margin-right: 20px;
            font-weight: normal;
        }

        form input[type="text"], form input[type="radio"] {
            width: calc(100% - 10px);
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-left: 5px;
        }

        form input[type="radio"] {
            width: auto;
        }

        form input[type="text"]:focus, form input[type="radio"]:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            outline: none;
        }

        .card-footer {
            text-align: center;
            margin-top: 15px;
        }

        .card-footer .btn {
            margin: 0 5px;
            padding: 8px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .card-footer .btn-success {
            background-color: #28a745;
            color: white;
        }

        .card-footer .btn-secondary {
            background-color: #6c757d;
            color: white;
        }

        .card-footer .btn-success:hover {
            background-color: #218838;
        }

        .card-footer .btn-secondary:hover {
            background-color: #5a6268;
        }

        .icon {
            margin-right: 5px;
        }

    </style>
@endpush

@section('content-body')
<h2>Chỉnh sửa thông tin</h2> 
<form action="{{route('admin.list-type-product.editsubmit')}}" method="post">
@csrf    
<input type="hidden" name="id" id="id" value="{{$vdmttypeproducts->id}}">
    <div>
        <label for="vdmttypeproductid"><i class="fas fa-id-badge icon"></i>Ma loai</label>
        <input type="text" name="vdmttypeproductid" id="vdmttypeproductid" value="{{$vdmttypeproducts->vdmttypeproductid}}">
    </div>
    <div>
        <label for="vdmttypeproductname"><i class="fas fa-tag icon"></i>Ten loai</label>
        <input type="text" name="vdmttypeproductname" id="vdmttypeproductname" value="{{$vdmttypeproducts->vdmttypeproductname}}">
    </div>
    <div>
        <label for="vdmttypeproductstatus"><i class="fas fa-toggle-on icon"></i>Trang thai</label>
        @if ($vdmttypeproducts->vdmttypeproductstatus === 1)
            <div class="radio-group">
                <input type="radio" name="vdmttypeproductstatus" id="vdmttypeproductstatus" value="1" checked>
                <label for="status">Hien thi</label>
            </div>
            &nbsp;
            <div class="radio-group">
                <input type="radio" name="vdmttypeproductstatus" id="vdmttypeproductstatus" value="0">
                <label for="status">Khoa</label>
            </div>
        @else 
            <div class="radio-group">
                <input type="radio" name="vdmttypeproductstatus" id="vdmttypeproductstatus" value="1">
                <label for="status">Hien thi</label>
            </div>
            &nbsp;
            <div class="radio-group">
                <input type="radio" name="vdmttypeproductstatus" id="vdmttypeproductstatus" value="0" checked>
                <label for="status">Khoa</label>
            </div>
        @endif
    </div>
    <div class="card-footer">
        <button class="btn btn-success"><i class="fas fa-save icon"></i>Ghi lai</button>
        <a href="{{route('admin.list-type-product')}}" class="btn btn-secondary"><i class="fas fa-arrow-left icon"></i>Quay lai</a>
    </div>
</form>
@endsection
