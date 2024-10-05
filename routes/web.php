<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlunoController;


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

    Route::resource('alunos', AlunoController::class);
    // Rota para a página de listagem de alunos
    
    Route::get('/alunos/list', [AlunoController::class, 'list'])->name('alunos.list');



   

});  

   
    /* Route::get('/alunos', 'AlunoController@index')->name('alunos.index');
    Route::get('/alunos', [AlunoController::class, 'edit'])->name('alunos.edit');
    Route::patch('/alunos', [AlunoController::class, 'update'])->name('alunos.update');
    Route::delete('/alunos', [ProfileController::class, 'destroy'])->name('alunos.destroy');
    Route::get('/alunos/create', [AlunoController::class, 'create'])->name('alunos.create');
    Route::post('/alunos', [AlunoController::class, 'store'])->name('alunos.store'); */



require __DIR__.'/auth.php';



