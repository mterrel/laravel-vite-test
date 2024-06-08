<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    {{-- <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,700&display=swap"
        rel="stylesheet"> --}}

    @vite('resources/css/app.css')
    <title>Home</title>
</head>

<body>
    <nav class="!bg-primary border-gray-200 py-3 w-full text-white ">
        <div class="container mx-auto items-center flex justify-between">
            <div class="kiri flex items-center">
                <img src="{{asset('images/logo-only.png')}}" class="w-16 mr-10" alt="Flowbite Logo" />
                <img src="{{asset('images/search.svg')}}" class="w-8 mr-2">
                <input type="search" placeholder="cari sepatu" class="h-full h-8 rounded-md px-2 text-black">
            </div>
            <div class="kanan font-normal flex items-center gap-2">
                <a href="" class="px-2">
                    <img src="{{asset('images/shopping-cart.svg')}}">
                </a>
                {{-- <a href="" class="px-2">
                    <img src="{{asset('images/heart.svg')}}">
                </a> --}}
                <a href="" class="px-5 border border-white rounded-md py-1 hover:bg-white  hover:text-black">Login</a>
            </div>
        </div>
    </nav>

</body>

</html>
