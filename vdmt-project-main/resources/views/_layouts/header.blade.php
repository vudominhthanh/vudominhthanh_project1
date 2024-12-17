<header>
    <div class="mainhead">
        <div class="logo"> 
            <img id="lg1" src="https://media.istockphoto.com/id/1458782106/vi/anh/khung-c%E1%BA%A3nh-tuy%E1%BB%87t-%C4%91%E1%BA%B9p-t%E1%BB%AB-tr%C3%AAn-kh%C3%B4ng-c%E1%BB%A7a-phong-c%E1%BA%A3nh-n%C3%BAi-non-v%E1%BB%9Bi-m%E1%BB%99t-khu-r%E1%BB%ABng-v%C3%A0-d%C3%B2ng-s%C3%B4ng-trong.jpg?s=1024x1024&w=is&k=20&c=N48fFDn1JmEdwZzptyNH34iA5HHUqLu9IJ7x0UjdN4k=" alt="Logo"> 
        </div>

        <div class="search"> 
            <form action="{{ route('search') }}" method="GET"> 
                <input type="text" name="searchin" placeholder="Search..."> 
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button> 
            </form>
        </div>
        
        <div class="inform">
            <button type='submit' id="but1" name="user"><i class="fa-thin fa-user"></i></button>
            <button type="submit" id="but2" name="logouts"><i class="fa-solid fa-right-from-bracket"></i></button>
            <button type="submit" id="but3" name="cart"><i class="fa-solid fa-envelope"></i></button>
        </div>
    </div>
</header>



