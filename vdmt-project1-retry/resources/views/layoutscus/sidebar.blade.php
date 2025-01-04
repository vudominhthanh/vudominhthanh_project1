{{-- <div class="sidebar">
    <h2>Type Product</h2>
    <ul>
        <li><a href="/home">Tất cả</a></li>
        @foreach ($vdmttypeproducts as $item)
            <input type="hidden" name="vdmttypeproductid" value="{{$item->vdmttypeproductid}}">
            <li><a href="/home/{{$item->vdmttypeproductid}}">{{$item->vdmttypeproductname}}</a></li>
        @endforeach
    </ul>
</div>
 --}}
 <div class="sidebar bg-light p-3 rounded shadow-sm">
    <h2 class="h5">Type Product</h2>
    <div class="list-group">
        <a href="/home" class="list-group-item list-group-item-action active">Tất cả</a>
        @foreach ($vdmttypeproducts as $item)
            <a href="/home/{{$item->vdmttypeproductid}}" class="list-group-item list-group-item-action">{{$item->vdmttypeproductname}}</a>
        @endforeach
    </div>
    <div class="add">
        <h2 class="h5" style="color:black">Địa chỉ</h2> 
        <div class="address bg-white p-3 rounded shadow-sm"> 
            <p><i class="fa-solid fa-location-dot me-2"></i>Số 123, Đường ABC, Quận XYZ, Thành phố Hà Nội</p> 
            <p><i class="fa-solid fa-phone me-2"></i>(+84) 123 456 789</p> 
            <p><i class="fa-solid fa-envelope me-2"></i>contact@example.com</p> 
        </div>
    </div>
    
</div>