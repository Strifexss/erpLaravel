<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class produtos extends Controller
{
    public function showProductView() {
        return view('produtos.index');
    }

    public function showNewProductModal() {
        return response()->json(['view' => view("components.produtos.modalCadastro")->render()]);
    }
}
