<?php

namespace App\Http\Controllers;

use App\Services\UserServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    protected $userServices;
    protected $request;

    public function __construct(
        UserServices $userServices,
        Request $request
    )
    {
        $this->userServices = $userServices;
        $this->request = $request;

    }

    public function showLoginForm()
    {
        return view('loginScreen.index');
    }

    public function showRegisterForm()
    {
        return view('loginScreen.registerScreen');
    }

    public function registerUser() {

        $this->request->validate([
            'email' => 'required|email',
            'nome' => 'required|string',
            'password' => 'required|string|min:7'
        ], [
            'email.required' => "Insira um email válido",
            'email.email' => "Insira um email válido",
            'nome.required' => "Insira um nome válido",
            'password.required' => "Insira uma senha válida",
            'password.min' => "A senha precisa ter no minimo 7 digitos"
        ]);


        $usuario = $this->request->only("nome", "email", "password");

        $create = $this->userServices->create($usuario);

        if($create === null) {
            return redirect("/")->with(['success' => "Usuario Criado com Sucesso"]);
        }
        else {
            return redirect()->back()->with(["error" => "Erro ao criar o usuário"]);
        }

    }

    public function loginUser() {
        $credentials = $this->request->only('email', 'password');

        if (Auth::attempt($credentials )) {
            return redirect("/selectEmpresa");
        }

        return back()->withErrors(['error' => 'Credenciais inválidas']);
    }

    public function logoutUser() {
        Auth::logout();

        return redirect("/");
    }


}
