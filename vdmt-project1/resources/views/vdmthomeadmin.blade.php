@extends('layoutsadmin.master')
@section('title','Home Admin')

@push('styles') 
    <link rel="stylesheet" href="{{ asset('appcssadmin/homeadmin.css') }}"> 
@endpush

@section('content')
    <h2>Quan tri noi dung</h2>
    <div class="box" style="height: 100px; width: 150px; background-color: aqua; border-radius: 10px;">
        <a href="">Test</a>
    </div>
    <div class="box" style="height: 100px; width: 150px; background-color: red; border-radius: 10px;">
        <a href="">Test</a>
    </div>
    <div class="box" style="height: 100px; width: 150px; background-color: gray; border-radius: 10px;">
        <a href="">Test</a>
    </div>
    <div class="box" style="height: 100px; width: 150px; background-color: green; border-radius: 10px;">
        <a href="">Test</a>
    </div>
@endsection