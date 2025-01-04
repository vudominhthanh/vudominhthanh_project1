@extends('layoutscus.master')

@section('title', 'Details')

@push('styles')
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f8f9fa; /* Màu nền tổng thể nhạt hơn */
        }

        .product-detail {
            display: flex;
            flex-wrap: wrap;
            padding: 20px;
            background-color: white; /* Nền trắng cho product detail */
            border-radius: 10px; /* Tùy chọn: làm tròn góc để đẹp hơn */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Tùy chọn: thêm đổ bóng để tạo chiều sâu */
        }

        .product-image {
            flex: 1 1 50%;
            padding: 10px;
        }

        .product-image img {
            width: 100%;
            height: auto;
        }

        .product-info {
            flex: 1 1 50%;
            padding: 10px;
        }

        .color-options,
        .product-price,
        .purchase-options {
            margin-bottom: 20px;
        }

        .purchase-options button {
            padding: 10px 20px;
            margin-right: 10px;
            cursor: pointer;
        }

        .buy-button {
            background-color: #28a745;
            color: white;
            border: none;
        }

        .add-cart-button {
            background-color: #ffc107;
            color: white;
            border: none;
        }

        .product-details {
            flex-basis: 100%;
            padding: 10px;
        }
        .product-image img {
            height: 300px;
            width: 300px;
        }
        .product-details {
            margin: 20px;
        }
        .product-info {
            height: 100px;
            width: 200px;
        }
        .product-price {
            height: 100px;
            width: 200px;
        }
        .product-detail{
            background-image: url('images/image1.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }
    </style>
@endpush

@section('content')
    <div class="product-detail">
        <div class="product-image">
            <img src="{{asset($vdmtproducts->vdmtproductimage) }}" alt="Product Image">
        </div>
        <div class="product-info">
            <div class="color-options">
                <p>{{$vdmtproducts->vdmtproductname}}</p>
            </div>
            <div class="product-price">
                <h3>Price : {{$vdmtproducts->vdmtproductprice}}</h3>
            </div>
            <div class="purchase-options">
                <button class="buy-button">Mua</button>
                <button class="add-cart-button">Thêm vào giỏ hàng</button>
            </div>
        </div>
        <div class="product-details">
          <p>chi tiet</p>
          <p>fgjdafgdifdhsfgjdjfgjdsfseftgsrehjfbhvsdhkfjbkvsknnlsdcvcvcvcvcvc
            vknlwkgrjkgreijbrtuherjogerbjerguehoerghureghurfgfrwuhrghuufyufvc
            suhdvsyudsuhfdsuifdushhurefhufrwuhueruhretguhiogetiogetioht5rehut5
            rbjrwjierwfjirfginkrgfgeiufgeiu</p>
        </div>
    </div>  
@endsection
