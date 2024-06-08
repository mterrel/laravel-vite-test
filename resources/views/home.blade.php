@extends('template.app')

@section('title')

@section('content')
    <div class="w-full h-[100vh] relative" style="background: url({{asset('images/bg-web.jpg')}})">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full">
            <div class="container mx-auto">
                <div class="grid grid-cols-2 gap-10 items-center">
                    <div class="text-white drop-shadow-xl">
                        <h3 class="font-semibold text-7xl py-4 mb-5">New Arrivals</h3>
                        <p class="text-xl">Jangan lewatkan kesempatan emas untuk memiliki sepatu limited edition yang hanya tersedia dalam jumlah terbatas. Desain eksklusif dan kualitas premium menjadikan sepatu ini pilihan sempurna untuk Anda yang ingin tampil beda dan memukau. Kenyamanan dan gaya berpadu dalam satu produk yang tak akan Anda temukan di tempat lain.</p>
                    </div>
                    <img src="https://studio.mrngroup.co/storage/app/media/cropped-images/Nike%20Go%20FlyEase-20210204093817.png?tr=w-600" class="w-full">
                </div>
            </div>
        </div>
    </div>
@endsection
