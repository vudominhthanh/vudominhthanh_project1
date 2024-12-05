<div>
    <h1>Hello im there</h1>
    <h1>Hello, im {{ $name }} </h1>
    <hr>
    <h1>Fruits : </h1>
    <ul>
        @foreach ($fruits as $item)
            <li>{{$item}}</li>
        @endforeach
    </ul>
</div>