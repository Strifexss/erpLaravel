<div class="w-[30%] h-screen flex flex-col justify-center items-start gap-12">
    <header class="text-5xl font-bold text-sky-500">
        Login.
    </header>
    <form id="form" action="/loginUser" method="POST" autocomplete="off" class="w-full flex justify-center items-start flex-col gap-8">
        @csrf
        <x-writeInput type="text" name="email" placeHolder="Email *"/>
        <x-writeInput type="password" name="password" placeHolder="Senha *"/>
        <div class="flex justify-center items-center gap-2">
            <input class="rounded-md"
                   type="checkbox" name="remember" id="remember">
            <h1 class="text-sm font-semibold text-zinc-500">
                Lembrar de mim
            </h1>
        </div>
        <div class="w-full flex justify-center items-start gap-2 flex-col">
            <a href="/registrar" class="w-full">
                <x-button bg="bg-zinc-400" bgHover="hover:bg-zinc-500" conteudo="Registrar" id="registrarButton"/>
            </a>
            <x-button bg="bg-sky-500" bgHover="hover:bg-sky-600" conteudo="Login" id="loginButton"/>
        </div>
    </form>
</div>
<script>

</script>
