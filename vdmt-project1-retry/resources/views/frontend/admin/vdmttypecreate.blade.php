@extends('layouts.master')
@section('title','Type product')

@section('content-body')
<h2>Chỉnh sửa thông tin</h2> 
<form action="{{route('admin.createsubmit')}}" method="post">
@csrf    
    <div>
        <label for="id">Ma loai</label>
        <input type="text" name="vdmttypeproductid" id="vdmttypeproductid" value="{{$vdmttypeproducts->vdmttypeproductid}}">
    </div>
    <div>
        <label for="name">Ten loai</label>
        <input type="text" name="vdmttypeproductname" id="vdmttypeproductname" value="{{$vdmttypeproducts->vdmttypeproductname}}">
    </div>
    <div>
        <label for="status">Trang thai</label>
            <div class="col-sm-10">
                <input type="radio" name="vdmttypeproductstatus" id="vdmttypeproductstatus" value="1" checked>
                <label for="status">Hien thi</label>
            </div>
            &nbsp;
            <div class="col-sm-10">
                <input type="radio" name="vdmttypeproductstatus" id="vdmttypeproductstatus" value="0" >
                <label for="status">Khoa</label>
            </div>
    </div>
    <div class="card-footer">
        <button class="btn btn-success">Ghi lai</button>
        <a href="{{route('admin.list-type-product')}}" class="btn btn-secondary">Quay lai</a>
    </div>
</form>
@endsection