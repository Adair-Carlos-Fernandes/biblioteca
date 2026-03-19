<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route:: get('/livros',[livrosController::class,'index']);

Route::get('/livros',function(){
    return view('livros'); //"Adair Carlos Fernandes"
});//->name('home-index');

route::fallback(function(){
    return "Atenção erro";
});
