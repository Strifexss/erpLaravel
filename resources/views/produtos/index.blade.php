@extends('layout')

@section('title') Produtos @endsection

@section('content')
    <div id="divPrincipal" class="w-full h-full flex flex-col gap-2 bg-white border-t-sky-500 border-t-4 p-4 rounded-md shadow-md relative">
        <div class="w-full flex flex-row justify-between items-center">
            <h1 class="font-semibold text-gray-500 text-2xl">
                Produtos
            </h1>
            <div class="flex justify-center items-center gap-4 text-[0.8rem]">
                <button id="cadastrarNovoProdutoButton" class="p-3 bg-sky-500 hover:bg-sky-700 transition-[0.1s] border-none rounded-md text-white font-bold">
                    Cadastrar novo Produto
                </button>
                <button class="p-3 bg-red-500 hover:bg-red-700 transition-[0.1s] border-none rounded-md text-white font-bold">
                    Excluir produtos selecionados
                </button>
            </div>
        </div>
        <div class="flex items-center justify-center">
        <x-produtos.table/>
        </div>
    </div>
<script>

    $("#cadastrarNovoProdutoButton").on("click", () => {
        $.ajax({
            url: "http://127.0.0.1:8000/produtos/newModal",
            method: "GET",
            dataType: "json",
            success: (response) => {
                $("#modalCadastro").remove()
                $("#divPrincipal").append(response.view)
            },
            error: () => {
                console.log("Deu erro")
            }
        })
    });

    $(document).on("click", "#closeModalCadastro", () => {
        $("#modalCadastro").remove()
    });

    $(document).on("click", "#cancelButton", () => {
        $("#modalCadastro").remove()
    })

</script>
@endsection

