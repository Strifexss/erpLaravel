<?php

namespace App\repositories;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class EmpresaRepository{

    public function create(array $empresa) {
        DB::table('empresa')->insert($empresa);
    }

    public function index(int $usuario_id)
    {
        return DB::table('empresa')
            ->where('usuario_id', $usuario_id)
            ->get();
    }
}
