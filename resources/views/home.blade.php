<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initialscale=1.0">
        @vite('resources/sass/app.scss')

        <style>
            body::-webkit-scrollbar {
                display: none;
            }
        </style>
    </head>
    <body>

        {{-- Template untuk parrent --}}
        @include('nav')
        {{--@yield('content')--}}

        <div class="container text-center my-5">
            <h1 class="mb-4">WELCOME TO MANAGEMENT ITEM</h1>
            <img class="img-thumbnail" style="width: 50%" src="{{Vite::asset('resources/images/Barang.jpg') }}" alt="image">
        </div>

        <div class="container d-flex justify-content-evenly align-items-center py-5">
            <div>
                <h3>INTRODUCTION</h3>
                <pre>Name   : Ricky Adam Saputra <br>Study  : Information System <br>Class  : IS 05 01 <br>Course : Pemrograman Framework</pre>
            </div>
            <div>
                <img class="img-thumbnail" style="width: 300px" src="{{Vite::asset('resources/images/profilekuu.png') }}" alt="image">
            </div>
        </div>

        @vite('resources/js/app.js')
    </body>
</html>
