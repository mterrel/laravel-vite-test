<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Register</title>
    <style>
        html,
        body {
            width: 100%;
            height: 100%;
        }

    </style>
</head>

<body>
    <div class="w-full h-[100vh]">
        <div class="flex items-center justify-center w-full h-full">

            <form method="POST" action="{{route('register')}}">
                @csrf
                <div class="w-96 flex flex-col gap-3">
                    <h1 class="text-semibold text-center text-2xl">Register</h1>
                    <input type="name" name="name" id="name" placeholder="name"
                        class="border border-black rounded-md p-2 text-xl">
                    <input type="email" name="email" id="email" placeholder="email"
                        class="border border-black rounded-md p-2 text-xl">
                    <input type="password" name="password" id="password" placeholder="password"
                        class="border border-black rounded-md p-2 text-xl">
                    <button type="submit" class="border bg-[#e09145] rounded-md text-lg w-full p-1">register</button>
                    <label class="font-semibold text-lg">Already have an account?
                        <a href="{{route('login')}}" class="text-blue-600 underline">Sign-in</a>
                    </label>
                </div>

            </form>
        </div>
    </div>


</body>

</html>
