
<div id="modalCadastroEmpresa"
    class="absolute flex flex-col justify-start items-center top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-[25rem] w-[30%] bg-white shadow-xl h-auto ">
    <header class="w-full p-4 flex justify-between items-center bg-zinc-700">
        <h1 class="text-white font-bold">
            Cadastre uma nova Empresa
        </h1>
        <h1 id="closeModalCadastro" class="text-white font-bold cursor-pointer">
            X
        </h1>
    </header>
    <div class="w-full h-full p-4 flex flex-col items-start text-[0.8rem] gap-6">
        <h1 class="text-gray-400 font-semibold">
            Cadastre as informações
        </h1>
        <form action="/empresa/createNewEmpresa" method="POST" id="createEmpresaForm" class="w-full flex justify-start flex-wrap gap-2">
            @csrf
            <div class="w-[48%] flex flex-col items-start gap-2">
                <x-inputForm label="Razão Social" nome="razao_social" type="text" placeHolder="RazãoSocial" />
            </div>
            <div class="w-[48%] flex flex-col items-start gap-2">
                <x-inputForm label="Nome Fantasia" nome="fantasia" type="text" placeHolder="Fantasia" />
            </div>
            <div class="w-[48%] flex flex-col items-start gap-2">
                <x-inputForm label="CNPJ" nome="cnpj" type="text" placeHolder="CNPJ" />
            </div>
            <div class="w-[48%] flex flex-col items-start gap-2">
                <x-inputForm label="Inscrição Estadual" nome="inscricao_estadual" type="text" placeHolder="InscriçãoEstadual" />
            </div>
            <div class="w-full flex justify-between items-center gap-2">
                <div id="cancelButton" class="w-[48%] flex flex-col items-start gap-2 mt-2">
                    <button id="cancelModalButton" class="w-full bg-zinc-300 p-2 rounded-md text-white font-bold">
                        Cancelar
                    </button>
                </div>
                <div class="w-[48%] flex flex-col items-start gap-2 mt-2">
                    <button id="cadastrarEmpresaButton" class="w-full bg-sky-500 p-2 rounded-md text-white font-bold">
                        Cadastrar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>

</script>
