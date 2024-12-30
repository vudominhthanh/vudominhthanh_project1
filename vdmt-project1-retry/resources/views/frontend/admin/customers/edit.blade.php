@extends('layouts.master')
@section('title','Customers')

@section('content-body')
<h2>Sua thông tin</h2> 
<form action="{{route('admin.list-customer.editsubmit')}}" method="post" enctype="multipart/form-data">
@csrf    
<input type="hidden" name="id" id="id"  value="{{$vdmtcustomers->id}}">
    <div>
        <label for="vdmtcusid">Id</label>
        <input type="text" name="vdmtcusid" id="vdmtcusid" value="{{$vdmtcustomers->vdmtcusid}}">
    </div>
    <div>
        <label for="vdmtcusname">Name</label>
        <input type="text" name="vdmtcusname" id="vdmtcusname" value="{{$vdmtcustomers->vdmtcusname}}">
    </div>
    <div> 
        <label for="vdmtcusemail">Email</label> 
        <input type="texttext" id="vdmtcusemail" name="vdmtcusemail" value="{{$vdmtcustomers->vdmtcusemail}}"> 
    </div>
    <div>
        <label for="vdmtcuspassword">Password</label>
        <input type="text" name="vdmtcuspassword" id="vdmtcuspassword" value="{{$vdmtcustomers->vdmtcuspassword}}">
    </div>
    <div>
        <label for="vdmtcusnumber">Number</label>
        <input type="text" name="vdmtcusnumber" id="vdmtcusnumber" value="{{$vdmtcustomers->vdmtcusnumber}}">
    </div>
    <div>
        <label for="vdmtcusaddress">Address</label>
        <input type="text" name="vdmtcusaddress" id="vdmtcusaddress" value="{{$vdmtcustomers->vdmtcusaddress}}">
    </div>
    <div>
        <label for="status">Trang thai</label>
        @if ($vdmtcustomers->vdmtcusstatus === 1 )
            <div class="col-sm-10">
                <input type="radio" name="vdmtcusstatus" id="vdmtcusstatus" value="1" checked>
                <label for="status">Hien thi</label>
            </div>
            &nbsp;
            <div class="col-sm-10">
                <input type="radio" name="vdmtcusstatus" id="vdmtcusstatus" value="0" >
                <label for="status">Khoa</label>
            </div>
        @else 
        <div class="col-sm-10">
            <input type="radio" name="vdmtcusstatus" id="vdmtcusstatus" value="1" >
            <label for="status">Hien thi</label>
        </div>
        &nbsp;
        <div class="col-sm-10">
            <input type="radio" name="vdmtcusstatus" id="vdmtcusstatus" value="0" checked>
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

