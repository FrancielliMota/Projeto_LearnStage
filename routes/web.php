<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\ProfessorController;
use App\Http\Controllers\CursoController;
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
    Route::resource('/alunos', AlunoController::class);
    Route::resource('/professores', ProfessorController::class);
    Route::resource('/cursos', CursoController::class);
    Route::resource('matriculas', MatriculaController::class);
    Route::get('/metricas', [MatriculaController::class, 'metricas'])->name('metricas');



});  

require __DIR__.'/auth.php';



