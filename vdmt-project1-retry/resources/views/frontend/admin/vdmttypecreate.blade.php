@extends('layouts.master')
@section('title','Type product')

@push('styles')
    <style>
        form {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 20px auto;
        }

        form div {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        form label {
            font-weight: bold;
            color: #333;
            flex: 1;
        }

        form input[type="text"], form input[type="radio"] {
            width: calc(100% - 20px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            margin-left: 10px;
            flex: 3;
        }

        .radio-group {
            display: flex;
            align-items: center;
            margin-right: 10px;
        }

        form input[type="radio"] {
            width: auto;
            margin: 0 5px 0 0;
        }

        form input[type="text"]:focus, form input[type="radio"]:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
            outline: none;
        }

        .card-footer {
            text-align: center;
            margin-top: 20px;
        }

        .card-footer .btn {
            margin: 0 10px;
            padding: 10px 20px;
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
            margin-right: 10px;
        }
    </style>
@endpush

@section('content-body')
<h2>Chỉnh sửa thông tin</h2> 
<form action="{{route('admin.createsubmit')}}" method="post">
@csrf    
    <div>
        <label for="vdmttypeproductid"><i class="fas fa-barcode icon"></i> Ma loai</label>
        <input type="text" name="vdmttypeproductid" id="vdmttypeproductid" value="{{$vdmttypeproducts->vdmttypeproductid}}">
    </div>
    <div>
        <label for="vdmttypeproductname"><i class="fas fa-tag icon"></i> Ten loai</label>
        <input type="text" name="vdmttypeproductname" id="vdmttypeproductname" value="{{$vdmttypeproducts->vdmttypeproductname}}">
    </div>
    <div>
        <label for="status"><i class="fas fa-toggle-on icon"></i> Trang thai</label>
        <div class="radio-group">
            <input type="radio" name="vdmttypeproductstatus" id="vdmttypeproductstatus1" value="1" checked>
            <label for="vdmttypeproductstatus1">Hien thi</label>
        </div>
        <div class="radio-group">
            <input type="radio" name="vdmttypeproductstatus" id="vdmttypeproductstatus2" value="0">
            <label for="vdmttypeproductstatus2">Khoa</label>
        </div>
    </div>  
    <div class="card-footer">
        <button class="btn btn-success"><i class="fas fa-save icon"></i> Ghi lai</button>
        <a href="{{route('admin.list-type-product')}}" class="btn btn-secondary"><i class="fas fa-arrow-left icon"></i> Quay lai</a>
    </div>
</form>
@endsection
