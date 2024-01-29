<?php

namespace App\Services;

use App\repositories\EmpresaRepository;
use Illuminate\Support\Facades\DB;

class EmpresaServices{

    private $repository;

    public function __construct(EmpresaRepository $repository)
    {
        $this->repository = $repository;
    }

    public function createEmpresa(array $empresa) {

        DB::beginTransaction();

        try {

            $empresa = $this->repository->create($empresa);

            DB::commit();

            return $empresa;
        }

        catch(\Exception $e) {

            DB::rollBack();

            throw $e;
        }

    }

    public function usuarioEmpresas(int $usuario_id) {
        return $this->repository->index($usuario_id);
    }
}
