@extends('layoutsadmin.master')
@section('title','Home Admin')

@push('styles') 
    <link rel="stylesheet" href="{{ asset('appcssadmin/homeadmin.css') }}"> 
@endpush

@section('content')
    <h2>Chỉnh sửa thông tin</h2> 
    
    <form action="{{route('vdmttypeproduct.editsubmit')}}" method="post">
    @csrf    
    <input type="hidden" name="hidden" id="hidden"  value="{{$vdmttypeproduct->id}}">
        <div>
            <label for="id">Ma loai</label>
            <input type="text" name="vdmttypeproductid" id="id" value="{{$vdmttypeproduct->vdmttypeproductid}}">
        </div>
        <div>
            <label for="name">Ten loai</label>
            <input type="text" name="vdmttypeproductname" id="name" value="{{$vdmttypeproduct->vdmttypeproductname}}">
        </div>
        <div>
            <label for="status">Trang thai</label>
            @if ($vdmttypeproduct->vdmttypeproductstatus === 1 )
                <div class="col-sm-10">
                    <input type="radio" name="status" id="status" value="1" checked>
                    <label for="status">Hien thi</label>
                </div>
                &nbsp;
                <div class="col-sm-10">
                    <input type="radio" name="status" id="status" value="0" >
                    <label for="status">Khoa</label>
                </div>
            @else 
            <div class="col-sm-10">
                <input type="radio" name="status" id="status" value="1" >
                <label for="status">Hien thi</label>
            </div>
            &nbsp;
            <div class="col-sm-10">
                <input type="radio" name="status" id="status" value="0" checked>
                <label for="status">Khoa</label>
            </div>
            @endif
        </div>
        <div class="card-footer">
            <button class="btn btn-success">Ghi lai</button>

            <a href="{{route('typelists')}}" class="btn btn-secondary">Quay lai</a>
        </div>
    </form>
@endsection