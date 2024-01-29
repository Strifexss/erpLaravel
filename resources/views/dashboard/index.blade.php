@extends('layout')
@section("tittle") Dashboard @endsection
@section("content")
    <div class="w-full h-full flex flex-col gap-6">
        <div class="w-full h-auto flex flex-row gap-2">
        <x-dashboard.header/>
        <div class="w-full grid grid-cols-2 gap-12">
            <div class="w-full flex flex-col justify-center gap-6">
                <div class="w-full h-auto grid grid-cols-2 gap-4">
                    <x-dashboard.avisos bg="bg-red-500" rodapeBg="bg-red-800"/>
                    <x-dashboard.avisos bg="bg-emerald-400" rodapeBg="bg-emerald-600"/>
                </div>
                <div class="flex flex-col gap-2 items-start">
                    <h1 class="font-semibold text-gray-500">
                        Principais Clientes
                    </h1>
                    <div class="w-full h-[5rem] bg-white rounded-md shadow-md grid grid-cols-4 place-content-center place-items-center">
                        <i class="fa-solid fa-user fa-2x"></i>
                        <h1 class="font-semibold">Solucoes LTDA</h1>
                        <h1 class="font-semibold">13215640001-78</h1>
                        <h1 class="font-semibold">Vendas: 10</h1>
                    </div>
                    <div class="w-full h-[5rem] bg-white rounded-md shadow-md grid grid-cols-4 place-content-center place-items-center">
                        <i class="fa-solid fa-user fa-2x"></i>
                        <h1 class="font-semibold">Solucoes LTDA</h1>
                        <h1 class="font-semibold">13215640001-78</h1>
                        <h1 class="font-semibold">Vendas: 10</h1>
                    </div>
                    <div class="w-full h-[5rem] bg-white rounded-md shadow-md grid grid-cols-4 place-content-center place-items-center">
                        <i class="fa-solid fa-user fa-2x"></i>
                        <h1 class="font-semibold">Solucoes LTDA</h1>
                        <h1 class="font-semibold">13215640001-78</h1>
                        <h1 class="font-semibold">Vendas: 10</h1>
                    </div>
                </div>
            </div>
                <div class="flex flex-col gap-2">
                    <h1 class="text-gray-500 font-semibold">
                        Atalhos
                    </h1>
                    <div class="flex items-center gap-2">
                        <x-dashboard.atalhos/>
                        <x-dashboard.atalhos/>
                        <x-dashboard.atalhos/>
                    </div>
                </div>

            </div>
    </div>
@endsection
