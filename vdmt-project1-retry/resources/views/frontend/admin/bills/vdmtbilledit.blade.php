@extends('layouts.master')
@section('title','Bills')

@section('content-body')
<h2>Sua thông tin</h2> 
<form action="{{route('admin.list-bill.editsubmit')}}" method="post" enctype="multipart/form-data">
@csrf    
<input type="hidden" name="id" id="id"  value="{{$vdmtbills->id}}">
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
        @if ($vdmtbills->vdmtbillstatus	 === 1 )
            <div class="col-sm-10">
                <input type="radio" name="vdmtbillstatus" id="vdmtbillstatus" value="1" checked>
                <label for="status">Hien thi</label>
            </div>
            &nbsp;
            <div class="col-sm-10">
                <input type="radio" name="vdmtbillstatus" id="vdmtbillstatus" value="0" >
                <label for="status">Khoa</label>
            </div>
        @else 
        <div class="col-sm-10">
            <input type="radio" name="vdmtbillstatus" id="vdmtbillstatus" value="1" >
            <label for="status">Hien thi</label>
        </div>
        &nbsp;
        <div class="col-sm-10">
            <input type="radio" name="vdmtbillstatus" id="vdmtbillstatus" value="0" checked>
            <label for="status">Khoa</label>
        </div>
        @endif
    </div>
    <div class="card-footer">
        <button class="btn btn-success">Ghi lai</button>
        <a href="{{route('admin.bill-list')}}" class="btn btn-secondary">Quay lai</a>
    </div>
</form>
@endsection

