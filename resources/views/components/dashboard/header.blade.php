<header class="font-bold w-[33rem] h-[10rem] rounded-md flex flex-col justify-center items-center gap-4 text-white bg-sky-500">
    <div class="flex flex-row gap-2 w-full items-center justify-center">
        <i class="fa-solid fa-cube fa-2x"></i>
        <h1 class="text-white text-3xl">Softcom</h1>
    </div>
    <h1 class="text-gray-200 font-semibold text-md">
        @auth
            Seja bem vindo {{Auth::user()->nome}}!
        @endauth
    </h1>
</header>
<div class="w-full h-[10rem] bg-white rounded-md p-4 flex flex-col items-start shadow-md border-l-sky-500 border-l-8">
    <h1 class="text-xl font-semibold text-gray-500">
        Estatísticas
    </h1>
</div>
</div>
