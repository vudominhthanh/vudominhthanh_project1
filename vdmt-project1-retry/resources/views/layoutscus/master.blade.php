{{-- <!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>@yield('title')</title> 
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <style>
        body {
            background-image: url('https://th.bing.com/th/id/OIP.bN5fzzBy3kIuljYqchOIPQHaEK?rs=1&pid=ImgDetMain');
        }
    </style>    
</head> 
<body> @include('layoutscus.header') 
    <div class="container"> 
        @include('layoutscus.sidebar') 
        <div class="main-content"> 
            @yield('content') 
        </div> 
    </div> 
    @include('layoutscus.footer') 
</body> 
</html> --}}

<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>@yield('title')</title> 
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    @stack('styles')
    <style>
        body {
            background-image: url('https://th.bing.com/th/id/OIP.bN5fzzBy3kIuljYqchOIPQHaEK?rs=1&pid=ImgDetMain');
        }
        .sidebar {
            background-image: url('images/image2.png');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
        }

    </style>
</head> 
<body>
    @include('layoutscus.header')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                @include('layoutscus.sidebar')
            </div>
            <div class="col-md-9">
                @yield('content')
            </div>
        </div>
    </div> 
    @include('layoutscus.footer') 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body> 
</html>
