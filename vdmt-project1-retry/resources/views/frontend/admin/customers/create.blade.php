@extends('layouts.master')
@section('title','Customer')

@section('content-body')
<h2>Them moi thông tin</h2> 
<form action="{{route('admin.createsubmit.customer')}}" method="post" enctype="multipart/form-data">
@csrf    
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
        <input type="text" name="vdmtcusemail" id="vdmtcusemail" value="{{$vdmtcustomers->vdmtcusemail}}">
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
        <label for="vdmtcusstatus">Trang thai</label>
            <div class="col-sm-10">
                <input type="radio" name="vdmtcusstatus" id="vdmtcusstatus" value="1" checked>
                <label for="status">Hoat dong</label>
            </div>
            &nbsp;
            <div class="col-sm-10">
                <input type="radio" name="vdmtcusstatus" id="vdmtcusstatus" value="0" >
                <label for="status">Khoa</label>
            </div>
    </div>
    <div class="card-footer">
        <button class="btn btn-success">Ghi lai</button>
        <a href="{{route('admin.list-customer')}}" class="btn btn-secondary">Quay lai</a>
    </div>
</form>
@endsection