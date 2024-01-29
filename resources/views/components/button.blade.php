@props([
    'bg',
    'bgHover',
    "conteudo",
    "id"
])

<button id="{{$id}}" type="button"
    class="w-full {{$bg}} {{$bgHover}} transition-[0.1s] rounded-md p-3 text-white font-semibold">
    {{$conteudo}}
</button>
