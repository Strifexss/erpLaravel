<?php

namespace App\Http\Controllers;

use App\Services\EmpresaServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class empresaController extends Controller
{
    protected $request;
    protected $service;

    public function __construct(Request $request, EmpresaServices $service)
    {
        $this->request = $request;
        $this->service = $service;
    }

    public function showSelectEmpresa() {

        $usuario_id = Auth::user()->id;

        $data = $this->service->usuarioEmpresas($usuario_id);

        return view("empresa.index")->with(['data' => $data]);
    }

    public function showNewEmpresaForm() {
       return response()->json(['view' => view("components.empresa.newEmpresaForm")->render()]);
    }

    public function createNewEmpresa() {

        try{
            $data = $this->request->only('razao_social', "fantasia", "cnpj", "inscricao_estadual");

            $data["usuario_id"] = Auth::user()->id;

            $data["inscricao_estadual"] = intval($data["inscricao_estadual"]);

            $this->service->createEmpresa($data);

            return redirect("/selectEmpresa")->with(["success" => "Empresa Criada com Sucesso"]);
        }
        catch(\Exception $e) {
            return redirect("/selectEmpresa")->withErrors(["error" => "Erro ao criar empresa"]);
        }

    }
}
