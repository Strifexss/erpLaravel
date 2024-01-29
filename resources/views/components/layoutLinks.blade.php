@props([
    'titulo',
    'icon',
    'link'
])

<a href="{{$link}}" class="w-full h-auto ">
    <div class="w-full h-[5.5rem] hover:bg-sky-700 transition-[0.1s] flex flex-col gap-4 justify-center items-center shadow-md">
        <i class="{{$icon}}" style="color: #ffffff;"></i>
        <h1 class="font-semibold text-white text-[0.8rem]">
            {{$titulo}}
        </h1>
    </div>
</a>
