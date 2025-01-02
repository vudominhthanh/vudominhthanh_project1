@extends('layouts.master')
@section('title','Quan tri noi dung')

@section('content-body')
    <div class="container">
        <div class="row">
            <h1>Thong ke he thong</h1>
        </div>
        <div class="col-md-4 col-lg-3">
            <div class="stats-card">
                <div class="stats-card-body">
                    <div class="icon-box bg-success-light">
                        <i class="fas fa-tags"></i>
                    </div>
                    <div class="stats-info">
                        <h5>Loại sản phẩm</h5>
                        <h3>{{$vdmttotalTypeProducts}}</h3>
                    </div>
                    <a href="{{route('vdmtadmin.vdmtloaisanpham')}}" class="stats-link">
                        Quản lý loại sản phẩm <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3">
            <div class="stats-card">
                <div class="stats-card-body">
                    <div class="icon-box bg-success-light">
                        <i class="fas fa-tags"></i>
                    </div>
                    <div class="stats-info">
                        <h5>Loại sản phẩm</h5>
                        <h3>{{$vdmttotalTypeProducts}}</h3>
                    </div>
                    <a href="{{route('admin.list-type-product')}}" class="stats-link">
                        Quản lý loại sản phẩm <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3">
            <div class="stats-card">
                <div class="stats-card-body">
                    <div class="icon-box bg-success-light">
                        <i class="fas fa-tags"></i>
                    </div>
                    <div class="stats-info">
                        <h5>Sản phẩm</h5>
                        <h3>{{$vdmttotalTypeProducts}}</h3>
                    </div>
                    <a href="{{route('admin.list-product')}}" class="stats-link">
                        Quản lý loại sản phẩm <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3">
            <div class="stats-card">
                <div class="stats-card-body">
                    <div class="icon-box bg-success-light">
                        <i class="fas fa-tags"></i>
                    </div>
                    <div class="stats-info">
                        <h5>Khach</h5>
                        <h3>{{$vdmttotalTypeProducts}}</h3>
                    </div>
                    <a href="{{route('admin.list-customer')}}" class="stats-link">
                        Quản lý loại sản phẩm <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-lg-3">
            <div class="stats-card">
                <div class="stats-card-body">
                    <div class="icon-box bg-success-light">
                        <i class="fas fa-tags"></i>
                    </div>
                    <div class="stats-info">
                        <h5>Bill</h5>
                        <h3>{{$vdmttotalTypeProducts}}</h3>
                    </div>
                    <a href="{{route('admin.bill-list')}}" class="stats-link">
                        Quản lý loại sản phẩm <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        {{-- <div class="col-md-4 col-lg-3">
            <div class="stats-card">
                <div class="stats-card-body">
                    <div class="icon-box bg-success-light">
                        <i class="fas fa-tags"></i>
                    </div>
                    <div class="stats-info">
                        <h5>Bill detail</h5>
                        <h3>{{$vdmttotalTypeProducts}}</h3>
                    </div>
                    <a href="{{route('vdmtadmin.vdmtloaisanpham')}}" class="stats-link">
                        Quản lý loại sản phẩm <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div> --}}
@endsection