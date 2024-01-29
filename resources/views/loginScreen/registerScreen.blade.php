<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar</title>
    @vite('resources/css/app.css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/07c7deefe5.js" crossorigin="anonymous"></script>
</head>
<div class="w-full h-full flex justify-center items-center">
    @if ($errors->any())
        <div id="Erros" class="absolute top-0 mt-4 p-4 bg-red-500 flex justify-center items-center text-white font-semibold">
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="text-center">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="w-[80%] md:w-[30%] h-screen flex flex-col justify-center items-start gap-12">
        <header class="text-5xl font-bold text-sky-500">
            Registrar.
        </header>
        <form id="registerForm" method="post" action="/registerUser" autocomplete="off" class="w-full flex justify-center items-start flex-col gap-8">
            @csrf
            <x-writeInput type="text" name="nome" placeHolder="Nome *"/>
            <x-writeInput type="text" name="email" placeHolder="Email *"/>
            <x-writeInput type="password" name="password" placeHolder="Senha *"/>
        </form>
        <div class="flex justify-center items-center gap-2">
            <input class="rounded-md" type="checkbox" name="remember" id="remember">
            <h1 class="text-sm font-semibold text-zinc-500">
                Lembrar de mim
            </h1>
        </div>
        <div class="w-full flex justify-center items-start gap-2 flex-col">
            <x-button bg="bg-sky-500" bgHover="hover:bg-sky-600" conteudo="Registar" id="registerButton"/>
        </div>
    </div>
</div>

<script>
    $("#registerButton").on("click", () => {
        $("#Erros").remove();
        $("#registerForm").submit();
    });

    setTimeout(() => {
        $("#Erros").remove();
    }, 3000);
</script>
