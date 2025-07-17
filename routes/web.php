<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/',[EventController::class, 'index'])->name('home');//Para mostrar todos os registros
Route::get('/events/create',[EventController::class,'create'])->name('events.create')->middleware('auth');//Para mostrar o registros da criação do forme no banco de dados e acessar o fome só quando logado rota middleware de autenticação
Route::get('/events/{id}',[EventController::class,'show']); //Para mostrar um dado especifico no banco
Route::post('/events', [EventController::class,'store'])->name('salvar'); //Para salvar os registros no banco
Route::delete('/events/{id}', [EventController::class, 'destroy'])->middleware('auth'); //Deletar um arquivo no banco de dados rota middleware de autenticação
Route::get('/events/edit/{id}', [EventController::class, 'edit'])->middleware('auth'); // edit um arquivo no banco de dados com a rota middleware de autenticação
Route::put('/events/update/{id}', [EventController::class, 'update'])->middleware('auth'); // Update um arquivo no banco de dados com a rota middleware de autenticação
//dashboard
Route::get('/dashboard', [EventController::class, 'dashboard'])->middleware('auth');

// Login jetstream e livewire
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
});

//ROuta de join para eventos de many to many
Route::post('/events/join/{id}', [EventController::class, 'joinEvent'])->middleware('auth');


//ROuta de remoção de eventos na dashboard
Route::delete('/events/leave/{id}', [EventController::class, 'leaveEvent'])->middleware('auth');
