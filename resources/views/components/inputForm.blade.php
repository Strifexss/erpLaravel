@props([
    "type",
    "nome",
    "placeHolder",
    "label"
])
<label class="font-semibold text-[0.8rem]"
  for={{$nome}}>
  {{$label}}
</label>
<input class="w-full rounded-md p-2 text-black font-semibold tex-[0.8]  border-2 outline-sky-500"
type={{$type}} name={{$nome}} id={{$nome}} placeholder={{$placeHolder}}>

