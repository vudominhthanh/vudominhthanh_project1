<div class="sidebar">
    <h2>Type Product</h2>
    <ul>
        <li><a href="/home">Tất cả</a></li>
        @foreach ($vdmttypeproducts as $item)
            <input type="hidden" name="vdmttypeproductid" value="{{$item->vdmttypeproductid}}">
            <li><a href="/home/{{$item->vdmttypeproductid}}">{{$item->vdmttypeproductname}}</a></li>
        @endforeach
    </ul>
</div>

