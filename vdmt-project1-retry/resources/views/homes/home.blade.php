{{-- 
@extends('layoutscus.master')

@section('title', 'Home')

@section('content')
    <div class="advertisement">Advertisement</div>
    <div class="products-section">
        <h2>Sản phẩm</h2>
        @foreach ($vdmtproducts as $item)
            <div class="product">
                <div><img src="{{asset($item->vdmtproductimage) }}" alt="Product 1"></div>
                <div><h3>{{$item->vdmtproductname}}</h3></div>
                <div><p>Giá: {{$item->vdmtproductprice}}</p></div>
            </div>
        @endforeach
    </div>
@endsection --}}
@extends('layoutscus.master')
@section('title', 'Home')

@push('styles')
    <style>
        .carousel-inner {
            height: 200px;
        }

        .carousel-inner img {
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .products-section{
            background-image: url('images/image1.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

        .products-section h2 {
            margin-bottom: 20px;
        }

        .h4 {
            color: white;
        }

        .product img {
            height: 250px;
            object-fit: cover;
            padding: 10px;
            border-radius: 20px;
        }

        .product {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .product:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        .carousel-item img{
            width: 744px;
            height: 200px;
        }
    </style>
@endpush

@section('content')
    <div id="advertisementCarousel" class="carousel slide mb-4 rounded shadow-sm" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/800x400?text=Advertisement+1" class="d-block w-100" alt="Advertisement 1">
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/800x400?text=Advertisement+2" class="d-block w-100" alt="Advertisement 2">
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/800x400?text=Advertisement+3" class="d-block w-100" alt="Advertisement 3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#advertisementCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#advertisementCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div class="products-section bg-white p-4 rounded shadow-sm">
        <h2 class="h4">Sản phẩm</h2>
        <div class="row">
            @foreach ($vdmtproducts as $item)
                <div class="col-md-4 col-lg-3 mb-4 clickable-div" onclick="location.href='/details/{{$item->id}}';" style="cursor: pointer;">
                    <div class="product card text-center h-100 shadow-sm">
                        <img src="{{asset($item->vdmtproductimage) }}" class="card-img-top" alt="Product 1">
                        <div class="card-body">
                            <h3 class="card-title h6">{{$item->vdmtproductname}}</h3>
                            <p class="card-text">Giá: {{$item->vdmtproductprice}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection



