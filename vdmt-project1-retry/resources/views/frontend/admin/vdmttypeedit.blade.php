@extends('layouts.master')
@section('title','Type product')

@section('content-body')
<h2>Chỉnh sửa thông tin</h2> 
<form action="{{route('admin.list-type-product.editsubmit')}}" method="post">
@csrf    
<input type="hidden" name="id" id="id"  value="{{$vdmttypeproducts->id}}">
    <div>
        <label for="vdmttypeproductid">Ma loai</label>
        <input type="text" name="vdmttypeproductid" id="vdmttypeproductid" value="{{$vdmttypeproducts->vdmttypeproductid}}">
    </div>
    <div>
        <label for="vdmttypeproductname">Ten loai</label>
        <input type="text" name="vdmttypeproductname" id="vdmttypeproductname" value="{{$vdmttypeproducts->vdmttypeproductname}}">
    </div>
    <div>
        <label for="vdmttypeproductstatus">Trang thai</label>
        @if ($vdmttypeproducts->vdmttypeproductstatus === 1 )
            <div class="col-sm-10">
                <input type="radio" name="vdmttypeproductstatus" id="vdmttypeproductstatus" value="1" checked>
                <label for="status">Hien thi</label>
            </div>
            &nbsp;
            <div class="col-sm-10">
                <input type="radio" name="vdmttypeproductstatus" id="vdmttypeproductstatus" value="0" >
                <label for="status">Khoa</label>
            </div>
        @else 
        <div class="col-sm-10">
            <input type="radio" name="vdmttypeproductstatus" id="vdmttypeproductstatus" value="1" >
            <label for="status">Hien thi</label>
        </div>
        &nbsp;
        <div class="col-sm-10">
            <input type="radio" name="vdmttypeproductstatus" id="vdmttypeproductstatus" value="0" checked>
            <label for="status">Khoa</label>
        </div>
        @endif
    </div>
    <div class="card-footer">
        <button class="btn btn-success">Ghi lai</button>
        <a href="{{route('admin.list-type-product')}}" class="btn btn-secondary">Quay lai</a>
    </div>
</form>
@endsection