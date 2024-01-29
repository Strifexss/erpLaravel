@props([
    'type',
    'name',
    'placeHolder'
])

<input class="w-full bg-inherit border-b-black border-b-2 py-2 text-xl outline-none focus:border-b-zinc-400 transition-[0.1s]"
       type="{{$type}}" name="{{$name}}" id="{{$name}}" placeholder="{{$placeHolder}}"/>
