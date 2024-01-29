<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\loginController;
use \App\Http\Controllers\dashboardController;
use App\Http\Controllers\empresaController;
use App\Http\Controllers\produtos;

/*User*/
Route::get("/", [loginController::class, 'showLoginForm']);
Route::get("/registrar", [loginController::class, 'showRegisterForm']);
Route::post("/registerUser", [loginController::class, "registerUser"]);
Route::post("/loginUser", [loginController::class, "loginUser"]);
Route::get("/logout", [loginController::class, "logoutUser"]);


Route::middleware(['web', 'auth'])->group(function () {

/*Empresa*/
Route::get("/selectEmpresa", [empresaController::class, "showSelectEmpresa"]);
Route::get("/empresa/showNewEmpresaForm", [empresaController::class, "showNewEmpresaForm"]);
Route::post("/empresa/createNewEmpresa", [empresaController::class, "createNewEmpresa"]);

/*DashBoard*/
Route::get("/dashboard", [dashboardController::class, "showDashboard"]);

/*Produtos*/
Route::get("/produtos", [produtos::class, "showProductView"]);
Route::get("/produtos/newModal", [produtos::class, "showNewProductModal"]);

});
