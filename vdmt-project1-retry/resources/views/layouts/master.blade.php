<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>@yield('title')</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
<style>
    body {
        background-image: url('https://th.bing.com/th/id/OIP.bN5fzzBy3kIuljYqchOIPQHaEK?rs=1&pid=ImgDetMain');
    }
    .sideBar {
        width: 250px;
    }
    .list-group {
        border-radius: 20px;
    }
    .wrapper {
        width: calc(100% - 250px);
    }
    .wrapper header {
        border-radius: 30px; 
        background-color: rgb(239, 239, 239);
    }
    .wrapper section {
        border-radius: 20px;
        padding: 10px;
        background-color: rgb(239, 239, 239);
    }
    .wrapper section ul li a{
        list-style-type: none;
        text-decoration: none;
    }
    .infor {
        background-color: rgb(239, 239, 239);
        height: 65px;
        width: 100%;
        border-radius: 40px;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 3px;
        display: flex; 
        align-items: center;
    }
    .infor img {
        border-radius: 25px;
        height: 45px;
        width: 45px;
    }
    .infor p {
        line-height: 65px;
        margin: 10px;
    }
    .search-bar { 
        display: flex; 
    } 
    .search-bar input[type="text"] { 
        padding: 8px 8px 8px 15px;
        width: 25%;
        margin: 10px; 
        font-size: 16px; 
        border: 1px solid #ccc; 
        border-radius: 20px 0 0 20px; 
        outline: none; 
    }
    .search-bar button { 
        padding: 8px 8px 8px 10px; 
        width: 42px;
        background-color: #28a745; 
        color: white; 
        border: 1px solid #28a745; 
        border-radius: 0 20px 20px 0; 
        cursor: pointer; 
        margin:10px 10px 10px -10px;
    } 
    .search-bar button:hover { 
        background-color: #218838;
    }
</style>
</head>
    <body>
        <section class="container-fluid d-flex">
            <nav class="sideBar m-1">
                @include('layouts.menu')
            </nav>
            <section class="wrapper m-1 ">
                <header class="border my-1">
                    @include('layouts.headertitle')
                </header>
                <section class="content-body border my-1">
                    @yield('content-body')
                </section>
            </section>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>

