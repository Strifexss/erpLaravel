<div id="modalCadastro"
    class="absolute flex flex-col justify-start items-center top-1/2 left-1/2 transform -translate-x-1/2 2xl:-translate-y-[25rem] -translate-y-[20rem] w-[40%] 2xl:w-[30%] bg-white shadow-xl h-auto ">
    <header class="w-full p-4 flex justify-between items-center bg-sky-500">
        <h1 class="text-white font-bold">
            Cadastre um novo Produto
        </h1>
        <h1 id="closeModalCadastro" class="text-white font-bold cursor-pointer">
            X
        </h1>
    </header>
    <div class="w-full h-full p-4 flex flex-col items-start text-[0.8rem] gap-6">
        <h1 class="text-gray-400 font-semibold">
            Cadastre as informações
        </h1>
        <div class="w-full flex justify-start flex-wrap gap-2">
            <div class="w-[48%] flex flex-col items-start gap-2">
                <label class="font-semibold text-[0.8rem]"
                    for="nome">
                    Nome
                </label>
                <input class="w-full rounded-md p-2 text-black font-semibold tex-[0.8]  border-2 outline-sky-500"
                    type="text" name="nome" id="nome" placeholder="Insira o nome do produto *">
            </div>
            <div class="w-[48%] flex flex-col items-start gap-2">
                <label class="font-semibold text-[0.8rem]"
                    for="referencia">
                    Referencia
                </label>
                <input class="w-full rounded-md p-2 text-black font-semibold tex-[0.8] border-2 outline-sky-500"
                    type="text" name="referencia" id="referencia" placeholder="Insira a Referencia do produto *">
            </div>
            <div class="w-[48%] flex flex-col items-start gap-2">
                <label class="font-semibold text-[0.8rem]"
                    for="referencia">
                    Grupo
                </label>
                <select name="" id="" class="w-full rounded-md p-2 text-black font-semibold tex-[0.8]  border-2 outline-sky-500">
                    <option value="">Selecione</option>
                </select>
            </div>
            <div class="w-[48%] flex flex-col items-start gap-2">
                <label class="font-semibold text-[0.8rem]"
                    for="nome">
                    Estoque Inicial
                </label>
                <input class="w-full rounded-md p-2 text-black font-semibold tex-[0.8]  border-2 outline-sky-500"
                    type="text" name="nome" id="nome" placeholder="Insira o nome do produto *">
            </div>
            <div id="cancelButton" class="w-[48%] flex flex-col items-start gap-2 mt-2">
                <button class="w-full bg-zinc-300 p-2 rounded-md text-white font-semibold">
                    Cancelar
                </button>
            </div>
            <div class="w-[48%] flex flex-col items-start gap-2 mt-2">
                <button class="w-full bg-sky-500 p-2 rounded-md text-white font-semibold">
                    Cadastrar
                </button>
            </div>
        </div>
    </div>
</div>
<script>

</script>
