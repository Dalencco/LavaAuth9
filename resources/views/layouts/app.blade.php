<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>iLand | @yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
@yield('css')
</head>
<body>

    <nav class="bg-indigo-600">
        <div class="mx-auto container py-5 flex justify-between items-center">
            <div class="text-3xl font-bold text-white">
                <p>iLand</p>
            </div>

            @if (auth()->check())
                <div class="items-center justify-center text-white flex space-x-4 flex-rows">
                    <a class="hover:text-gray-300 duration-150 transition" href="{{ route('home.index') }}"> Home </a>
                    <a class="hover:text-gray-300 duration-150 transition" href="{{ route('profile.index') }}"> Profile </a>
                    <a class="hover:text-gray-300 duration-150 transition" href="{{ route('logout.index') }}"> Logout </a>
                </div>
            @else
                <div class="items-center justify-center text-white flex space-x-4 flex-rows">
                    <a class="hover:text-gray-300 duration-150 transition" href="{{ route('home.index') }}"> Home </a>
                    <a class="hover:text-gray-300 duration-150 transition" href="{{ route('login.index') }}"> Login </a>
                    <a class="hover:text-gray-300 duration-150 transition" href="{{ route('register.index') }}"> Register </a>
                </div>
            @endif
        </div>
    </nav>

@yield('content')

@yield('javascript')
</body>
</html>