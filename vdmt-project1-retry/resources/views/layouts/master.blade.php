<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>@yield('title')</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
@stack('styles')
@stack('scripts')
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
    margin: 5px 0;
    display: flex; 
    align-items: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .infor img {
        border-radius: 50%;
        height: 45px;
        width: 45px;
        margin-right: 10px;
    }

    .infor p {
        line-height: 1.6;
        margin: 0;
        font-weight: bold;
    }

    .list-group-item {
        border: none;
        border-radius: 0;
        padding: 10px 15px;
        transition: background-color 0.3s ease;
    }

    .list-group-item a {
        text-decoration: none;
        color: #333;
        display: block;
    }

    .list-group-item.active {
        background-color: #007bff;

    }
    .list-group-item.active a{
        color: white;
    }

    .list-group-item:hover {
        background-color: #f1f1f1;
    }

    /* .search-bar { 
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
    } */
    .header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 65px;
}

.search-bar { 
    display: flex; 
    align-items: center;
} 

.search-bar input[type="text"] { 
    padding: 8px 8px 8px 15px;
    width: 250px;
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

.logout {
    margin: 10px 20px 10px 10px;
}

.logout a {
    display: flex;
    align-items: center;
    text-decoration: none;
    color: black; /* Màu sắc cho văn bản */
    padding: 10px; /* Tùy chỉnh padding nếu cần */
}

.logout a:hover {
    color: #28a745; /* Màu sắc khi di chuột qua */
}



    .container {
         display: flex; 
         flex-wrap: wrap; 
         justify-content: space-around; 
    }
    .row {
        width: 100%;
        height: 75px;
    }

    .stats-card {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    transition: transform 0.3s, box-shadow 0.3s;
    width: 250px;
    height: 200px;
    }

    .stats-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .stats-card-body {
        padding: 20px;
        text-align: center;
    }

    .icon-box {
        display: inline-block;
        padding: 10px;
        border-radius: 50%;
        background-color: #e0f7fa;
        color: #00796b;
        margin-bottom: 10px;
    }

    .bg-success-light {
        background-color: #e8f5e9 !important;
    }

    .stats-info h5 {
        font-size: 16px;
        margin: 10px 0;
        color: #333;
    }

    .stats-info h3 {
        font-size: 32px;
        margin: 0;
        color: #00796b;
    }

    .stats-link {
        display: block;
        margin-top: 15px;
        color: #00796b;
        text-decoration: none;
        font-weight: bold;
    }

    .stats-link:hover {
        text-decoration: underline;
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

