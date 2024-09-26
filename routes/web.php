<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;

use App\Http\Controllers\CursoController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\MatriculaController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});  


    Route::get('/alunos', 'AlunoController@index')->name('alunos.index');


   
    Route::get('/alunos', [AlunoController::class, 'edit'])->name('alunos.edit');
    Route::patch('/alunos', [AlunoController::class, 'update'])->name('alunos.update');
    Route::delete('/alunos', [ProfileController::class, 'destroy'])->name('alunos.destroy');
    

    // Rota para salvar os dados no banco (método store)
    Route::post('/alunos', [AlunoController::class, 'store'])->name('alunos.store');


    // Route::resource('alunos', AlunoController::class);
    
    Route::get('/alunos/create', [AlunoController::class, 'create'])->name('alunos.create');
    Route::post('/alunos', [AlunoController::class, 'store'])->name('alunos.store');



require __DIR__.'/auth.php';



