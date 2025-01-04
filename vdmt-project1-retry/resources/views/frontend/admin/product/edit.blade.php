@extends('layouts.master')
@section('title','Product')

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

        form input[type="text"], form input[type="file"] {
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
            margin-left: 0;
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
<h2>Sua thông tin</h2> 
<form action="{{route('admin.list-product.editsubmit')}}" method="post" enctype="multipart/form-data">
@csrf    
<input type="hidden" name="id" id="id"  value="{{$vdmtproducts->id}}">
    <div>
        <label for="vdmtproductid"><i class="fas fa-barcode icon"></i> Ma san pham</label>
        <input type="text" name="vdmtproductid" id="vdmtproductid" value="{{$vdmtproducts->vdmtproductid}}">
    </div>
    <div>
        <label for="vdmtproductname"><i class="fas fa-tag icon"></i> Ten san pham</label>
        <input type="text" name="vdmtproductname" id="vdmtproductname" value="{{$vdmtproducts->vdmtproductname}}">
    </div>
    <div> 
        <label for="vdmtproductimage"><i class="fas fa-image icon"></i> Product Image:</label> 
        @if($vdmtproducts->vdmtproductimage) 
            <img src="{{ asset($vdmtproducts->vdmtproductimage) }}" alt="Product Image" style="width: 150px; height: auto;"> 
        @endif 
        <input type="file" id="vdmtproductimage" name="vdmtproductimage" value="{{$vdmtproducts->vdmtproductimage}}"> 
    </div>
    <div>
        <label for="vdmtproductquantity"><i class="fas fa-cubes icon"></i> So luong</label>
        <input type="text" name="vdmtproductquantity" id="vdmtproductquantity" value="{{$vdmtproducts->vdmtproductquantity}}">
    </div>
    <div>
        <label for="vdmtproductprice"><i class="fas fa-dollar-sign icon"></i> Gia</label>
        <input type="text" name="vdmtproductprice" id="vdmtproductprice" value="{{$vdmtproducts->vdmtproductprice}}">
    </div>
    <div>
        <label for="vdmttypeproductid"><i class="fas fa-list icon"></i> Ten loai</label>
        <select name="vdmttypeproductid" id="vdmttypeproductid"> 
            @foreach ($vdmttypeproducts as $item)           
                <option value="{{ $item->vdmttypeproductid}}" {{ (old('vdmttypeproductid', $vdmtproduct->vdmttypeproductid ?? '') == $item->vdmttypeproductid) ? 'selected' : '' }}>
                    {{$item->vdmttypeproductname}}
                </option> 
            @endforeach
        </select>
    </div>
    <div>
        <label for="status"><i class="fas fa-toggle-on icon"></i> Trang thai</label>
        @if ($vdmtproducts->vdmtproductstatus === 1 )
            <div class="radio-group">
                <input type="radio" name="vdmtproductstatus" id="vdmtproductstatus1" value="1" checked>
                <label for="vdmtproductstatus1">Hien thi</label>
            </div>
            &nbsp;
            <div class="radio-group">
                <input type="radio" name="vdmtproductstatus" id="vdmtproductstatus2" value="0" >
                <label for="vdmtproductstatus2">Khoa</label>
            </div>
        @else 
        <div class="radio-group">
            <input type="radio" name="vdmtproductstatus" id="vdmtproductstatus1" value="1" >
            <label for="vdmtproductstatus1">Hien thi</label>
        </div>
        &nbsp;
        <div class="radio-group">
            <input type="radio" name="vdmtproductstatus" id="vdmtproductstatus2" value="0" checked>
            <label for="vdmtproductstatus2">Khoa</label>
        </div>
        @endif
    </div>
    <div class="card-footer">
        <button class="btn btn-success"><i class="fas fa-save icon"></i> Ghi lai</button>
        <a href="{{route('admin.list-product')}}" class="btn btn-secondary"><i class="fas fa-arrow-left icon"></i> Quay lai</a>
    </div>
</form>
@endsection
