<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empresa</title>
    @vite('resources/css/app.css')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/07c7deefe5.js" crossorigin="anonymous"></script>
</head>
<div id="divPrincipal" class="w-screen h-screen bg-slate-100 flex flex-col justify-start items-center p-4 font-bold gap-2">
    @if (Session::has('success'))
        <div id="message" class=" w-[25rem] px-20 rounded-md py-4 mt-4 bg-emerald-500 text-white font-semibold">
            <h1>
                {{ Session::get('success')}}
            </h1>
        </div>
    @endif
    <header class="flex flex-col items-center justify-center w-[25rem] h-[8rem] bg-sky-500 rounded-md gap-4">
        <div class="flex flex-row gap-2 w-full items-center justify-center">
            <i class="fa-solid fa-cube fa-2x" style="color: #ffffff;"></i>
            <h1 class="text-white text-3xl">Softcom</h1>
        </div>
        <h1 class="text-gray-200 font-semibold text-md text-center">
            @auth
                Seja bem vindo {{Auth::user()->nome}}! <br> Escolha uma empresa:
            @endauth
        </h1>
    </header>
    <div class="w-[25rem] py-3">
        <x-button id="createNewEmpresa" bg="bg-zinc-500" bgHover="hover:bg-zinc-700" conteudo="Criar nova Empresa"/>
    </div>
    @foreach ($data as $empresa)
        <a href="/dashboard">
            <div class="flex items-center p-4 justify-start w-[25rem] h-[7rem] bg-white shadow-xl rounded-md gap-4">
                <i class="fa-regular fa-folder-open fa-3x" style="color: #74C0FC;"></i>
                <h1 class="text-[#74C0FC] font-semibold text-xl">
                    {{$empresa->fantasia}}
                </h1>
            </div>
        </a>
    @endforeach
</div>
<script>

    $("#createNewEmpresa").on("click", () => {
        $.ajax({
            url: "http://127.0.0.1:8000/empresa/showNewEmpresaForm",
            method: "GET",
            dataType: "json",
            success: (response) => {
                console.log(response)
                $("#modalCadastroEmpresa").remove();
                $("#divPrincipal").append(response.view);
            },
            error: (error) => {
                console.log(error);
            }
        })
    });

    $(document).on("click", "#closeModalCadastro", () => {
      $("#modalCadastroEmpresa").remove();
    });

    $(document).on("click", "#cancelModalButton", () => {
      $("#modalCadastroEmpresa").remove();
    });

    $(document).on("click", "#cadastrarEmpresaButton", () => {
        $("createEmpresaForm").submit();
    });

    setTimeout(() => {
        $("#message").remove();
    }, 3000);

</script>
