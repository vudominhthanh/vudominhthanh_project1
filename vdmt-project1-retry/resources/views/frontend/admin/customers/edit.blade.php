@extends('layouts.master')
@section('title','Customers')

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
<h2>Sua thông tin</h2> 
<form action="{{route('admin.list-customer.editsubmit')}}" method="post" enctype="multipart/form-data">
@csrf    
<input type="hidden" name="id" id="id"  value="{{$vdmtcustomers->id}}">
    <div>
        <label for="vdmtcusid"><i class="fas fa-id-badge icon"></i>Id</label>
        <input type="text" name="vdmtcusid" id="vdmtcusid" value="{{$vdmtcustomers->vdmtcusid}}">
    </div>
    <div>
        <label for="vdmtcusname"><i class="fas fa-user icon"></i>Name</label>
        <input type="text" name="vdmtcusname" id="vdmtcusname" value="{{$vdmtcustomers->vdmtcusname}}">
    </div>
    <div> 
        <label for="vdmtcusemail"><i class="fas fa-envelope icon"></i>Email</label> 
        <input type="text" id="vdmtcusemail" name="vdmtcusemail" value="{{$vdmtcustomers->vdmtcusemail}}"> 
    </div>
    <div>
        <label for="vdmtcuspassword"><i class="fas fa-lock icon"></i>Password</label>
        <input type="text" name="vdmtcuspassword" id="vdmtcuspassword" value="{{$vdmtcustomers->vdmtcuspassword}}">
    </div>
    <div>
        <label for="vdmtcusnumber"><i class="fas fa-phone icon"></i>Number</label>
        <input type="text" name="vdmtcusnumber" id="vdmtcusnumber" value="{{$vdmtcustomers->vdmtcusnumber}}">
    </div>
    <div>
        <label for="vdmtcusaddress"><i class="fas fa-map-marker-alt icon"></i>Address</label>
        <input type="text" name="vdmtcusaddress" id="vdmtcusaddress" value="{{$vdmtcustomers->vdmtcusaddress}}">
    </div>
    <div>
        <label for="status"><i class="fas fa-toggle-on icon"></i>Trang thai</label>
        @if ($vdmtcustomers->vdmtcusstatus === 1)
            <div class="radio-group">
                <input type="radio" name="vdmtcusstatus" id="vdmtcusstatus" value="1" checked>
                <label for="status">Hien thi</label>
            </div>
            &nbsp;
            <div class="radio-group">
                <input type="radio" name="vdmtcusstatus" id="vdmtcusstatus" value="0">
                <label for="status">Khoa</label>
            </div>
        @else 
            <div class="radio-group">
                <input type="radio" name="vdmtcusstatus" id="vdmtcusstatus" value="1">
                <label for="status">Hien thi</label>
            </div>
            &nbsp;
            <div class="radio-group">
                <input type="radio" name="vdmtcusstatus" id="vdmtcusstatus" value="0" checked>
                <label for="status">Khoa</label>
            </div>
        @endif
    </div>
    <div class="card-footer">
        <button class="btn btn-success"><i class="fas fa-save icon"></i>Ghi lai</button>
        <a href="{{route('admin.list-customer')}}" class="btn btn-secondary"><i class="fas fa-arrow-left icon"></i>Quay lai</a>
    </div>
</form>
@endsection
