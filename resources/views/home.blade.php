@extends('template.app')

@section('title')

@section('content')
<div class="w-full h-[100vh] relative" style="background: url({{asset('images/bg-web.jpg')}})">
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full">
        <div class="container mx-auto">
            <div class="grid grid-cols-2 gap-10 items-center">
                <div class="text-white drop-shadow-xl">
                    <h3 class="font-semibold text-7xl py-4 mb-5">New Arrivals</h3>
                    <p class="text-4xl font-semibold italic mb-1">Nike FlyEase</p>
                    <p class="text-xl">Jangan lewatkan kesempatan emas untuk memiliki "Nike FlyEase" yang hanya
                        tersedia dalam jumlah terbatas. Desain eksklusif dan kualitas premium menjadikan sepatu ini
                        pilihan sempurna untuk Anda yang ingin tampil beda dan memukau. Kenyamanan dan gaya berpadu
                        dalam satu produk yang tak akan Anda temukan di tempat lain.</p>
                </div>
                <img src="https://studio.mrngroup.co/storage/app/media/cropped-images/Nike%20Go%20FlyEase-20210204093817.png?tr=w-600"
                    class="w-full">
            </div>
            <div class="button">
                <a href="" class="border border-[#e09145] rounded-md p-2 bg-[#e09145] text-2xl font-normal">Belanja Sekarang</a>
            </div>
        </div>
    </div>
</div>


{{-- Hero Content --}}
<div class="text-black font-bold">
    <div class="container mx-auto">
        <h1 class="text-7xl mt-16 mb-4">Recommended For You</h1>
        <div class="grid grid-cols-3 gap-8 mb-16">


            {{-- <div class="bg-[#EEEEEE] rounded-xl p-4 text-center text-[#17181D] text-wrap">
                <img src="{{asset('images/nb530-js.png')}}" class="mb-10 w-full">
                <h2 class="font-normal text-2xl mb-5">New Balance 530 Juniper Sage</h2>
                <h3 class="font-light text-xl mb-10">Rp. 1.750.000</h3>
            </div> --}}

            @foreach ($products as $product)
            <div class="bg-[#EEEEEE] rounded-xl p-4 text-center text-[#17181D] text-wrap relative">
                <a href="" class="content-end">
                    <img src="{{asset('images/shopping-cart-2.svg')}}" class="top-2 right-3 mr-3 mt-3 w-10 absolute">
                </a>
                <img src="{{asset('images/nb530-js.png')}}" class="mb-10 w-full">
                <h2 class="font-normal text-2xl">{{  $product->nama  }}</h2>
                <h3 class="font-light text-xl my-10">Rp. {{ number_format($product->harga,2,',','.')  }}</h3>
            </div>


            @endforeach
        </div>
    </div>
</div>
@endsection
