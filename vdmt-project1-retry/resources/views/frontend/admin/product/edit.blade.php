@extends('layouts.master')
@section('title','Product')

@section('content-body')
<h2>Sua thông tin</h2> 
<form action="{{route('admin.list-product.editsubmit')}}" method="post" enctype="multipart/form-data">
@csrf    
<input type="hidden" name="id" id="id"  value="{{$vdmtproducts->id}}">
    <div>
        <label for="vdmtproductid">Ma san pham</label>
        <input type="text" name="vdmtproductid" id="vdmtproductid" value="{{$vdmtproducts->vdmtproductid}}">
    </div>
    <div>
        <label for="vdmtproductname">Ten san pham</label>
        <input type="text" name="vdmtproductname" id="vdmtproductname" value="{{$vdmtproducts->vdmtproductname}}">
    </div>
    <div> 
        <label for="vdmtproductimage">Product Image:</label> 
        @if($vdmtproducts->vdmtproductimage) 
            <img src="{{ asset($vdmtproducts->vdmtproductimage) }}" alt="Product Image" style="width: 150px; height: auto;"> 
        @endif 
        <input type="file" id="vdmtproductimage" name="vdmtproductimage" value="{{$vdmtproducts->vdmtproductimage}}"> 
    </div>
    <div>
        <label for="vdmtproductquantity">So luong</label>
        <input type="text" name="vdmtproductquantity" id="vdmtproductquantity" value="{{$vdmtproducts->vdmtproductquantity}}">
    </div>
    <div>
        <label for="vdmtproductprice">Gia</label>
        <input type="text" name="vdmtproductprice" id="vdmtproductprice" value="{{$vdmtproducts->vdmtproductprice}}">
    </div>
    <div>
        <label for="id">Ten loai</label>
        <select name="vdmttypeproductid" id="vdmttypeproductid"> 
            @foreach ($vdmttypeproducts as $item)           
                <option value="{{ $item->vdmttypeproductid}}" {{ (old('vdmttypeproductid', $vdmtproduct->vdmttypeproductid ?? '') == $item->vdmttypeproductid) ? 'selected' : '' }}>
                    {{$item->vdmttypeproductname}}
                </option> 
            @endforeach
        </select>
    </div>
    <div>
        <label for="status">Trang thai</label>
        @if ($vdmtproducts->vdmtproductstatus === 1 )
            <div class="col-sm-10">
                <input type="radio" name="vdmtproductstatus" id="vdmtproductstatus" value="1" checked>
                <label for="status">Hien thi</label>
            </div>
            &nbsp;
            <div class="col-sm-10">
                <input type="radio" name="vdmtproductstatus" id="vdmtproductstatus" value="0" >
                <label for="status">Khoa</label>
            </div>
        @else 
        <div class="col-sm-10">
            <input type="radio" name="vdmtproductstatus" id="vdmtproductstatus" value="1" >
            <label for="status">Hien thi</label>
        </div>
        &nbsp;
        <div class="col-sm-10">
            <input type="radio" name="vdmtproductstatus" id="vdmtproductstatus" value="0" checked>
            <label for="status">Khoa</label>
        </div>
        @endif
    </div>
    <div class="card-footer">
        <button class="btn btn-success">Ghi lai</button>
        <a href="{{route('admin.list-product')}}" class="btn btn-secondary">Quay lai</a>
    </div>
</form>
@endsection

