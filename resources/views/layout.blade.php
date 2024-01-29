<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('tittle')</title>
    @vite('resources/css/app.css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/07c7deefe5.js" crossorigin="anonymous"></script>
</head>
<div class="w-screen h-screen bg-slate-100 flex flex-row items-center">
    <div class="md:w-[7%] 2xl:w-[5%] h-full bg-zinc-800">
        <header class="h-[4.7rem] w-full bg-sky-700 flex justify-center items-center">
            <i class="fa-solid fa-cart-shopping fa-2xl" style="color: #ffffff;"></i>
        </header>
        <x-layoutLinks link="/dashboard" titulo="Dashboard" icon="fa-solid fa-table-columns fa-sm"/>
        <x-layoutLinks link="/produtos" titulo="Produtos" icon="fa-solid fa-diamond fa-sm"/>
        <x-layoutLinks link="/Empresa" titulo="Empresa" icon="fa-solid fa-building fa-sm"/>
    </div>
    <div class="w-full h-full flex flex-col ">
        <div class="w-full h-[5rem] bg-zinc-800 flex justify-end items-center p-4">
            @auth
                <a href="/logout">
                    <h1 class="font-semibold text-white">
                        {{Auth::user()->nome}}
                    </h1>
                </a>
            @endauth
        </div>
        <div class="w-full h-full px-6 py-4">
            @yield('content')
        </div>
    </div>
</div>

