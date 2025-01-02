@extends('layouts.master')
@section('title','Bill')

@section('content-body')
<h2>Them moi thông tin</h2> 
<form action="{{route('admin.createsubmit.bill')}}" method="post" enctype="multipart/form-data">
@csrf    
    <div>
        <label for="vdmtbillid">Bill Id</label>
        <input type="text" name="vdmtbillid" id="vdmtbillid" value="{{$vdmtbills->vdmtbillid}}">
    </div>
    <div>
        <label for="vdmtcusid">Cus Id</label>
        <input type="text" name="vdmtcusid" id="vdmtcusid" value="{{$vdmtbills->vdmtcusid}}">
    </div>
    <div>
        <label for="vdmtcusname">Cus name</label>
        <input type="text" name="vdmtcusname" id="vdmtcusname" value="{{$vdmtbills->vdmtcusname}}">
    </div>
    <div>
        <label for="vmdtcusemail">Email</label>
        <input type="email" name="vmdtcusemail" id="vmdtcusemail" value="{{$vdmtbills->vmdtcusemail}}">
    </div>
    <div>
        <label for="vdmtcusnumber">Number</label>
        <input type="number" name="vdmtcusnumber" id="vdmtcusnumber" value="{{$vdmtbills->vdmtcusnumber}}">
    </div>
    <div>
        <label for="vdmtcusaddress">Address</label>
        <input type="text" name="vdmtcusaddress" id="vdmtcusaddress" value="{{$vdmtbills->vdmtcusaddress}}">
    </div>
    <div>
        <label for="vdmtbilltotal">Total</label>
        <input type="number" name="vdmtbilltotal" id="vdmtbilltotal" value="{{$vdmtbills->vdmtbilltotal}}">
    </div>
    <div>
        <label for="vdmtbillstatus">Trang thai</label>
            <div class="col-sm-10">
                <input type="radio" name="vdmtbillstatus" id="vdmtbillstatus" value="1" checked>
                <label for="status">Hoat dong</label>
            </div>
            &nbsp;
            <div class="col-sm-10">
                <input type="radio" name="vdmtbillstatus" id="vdmtbillstatus" value="0" >
                <label for="status">Khoa</label>
            </div>
    </div>
    <div class="card-footer">
        <button class="btn btn-success">Ghi lai</button>
        <a href="{{route('admin.bill-list')}}" class="btn btn-secondary">Quay lai</a>
    </div>
</form>
@endsection