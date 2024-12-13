<header>
    <div class="mainhead">
        <div class="logo"> <img src="{{ asset('path/to/logo.png') }}" alt="Logo"> </div>

        <div class="search"> 
            <form action="{{ route('search') }}" method="GET"> 
                <input type="text" name="searchin" placeholder="Search..."> 
                <button type="submit">Search</button> 
            </form>
        </div>
        
        <div class="inform">
            <button type='submit' name="user"><i class="fa-thin fa-user"></i></button>
            <button type="submit" name="logouts"><i class="fa-solid fa-right-from-bracket"></i></button>
            <button type="submit" name="cart"><i class="fa-solid fa-envelope"></i></button>
        </div>
    </div>
</header>



