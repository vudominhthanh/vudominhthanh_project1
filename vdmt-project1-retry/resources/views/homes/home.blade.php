
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
@endsection
