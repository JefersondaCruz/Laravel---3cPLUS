<?php

use App\Enums\SupportStatus;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Site\SiteController;
use App\Http\Controllers\Admin\{SupportController};
use Illuminate\Support\Facades\Route;





Route::get('/contato', [SiteController::class, 'contact']);

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

Route::delete('/supports/{id}', [SupportController::class,'destroy'])->name('supports.destroy');

Route::put("/supports/{id}", [SupportController::class,"update"])->name("supports.update");

Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');

Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');

Route::get('/supports/{id}', [SupportController::class,'show'])->name('supports.show');

Route::post('/supports', [SupportController::class,'store'])->name('supports.store');

Route::get('/supports',[SupportController::class, 'index'])->name('supports.index');

require __DIR__.'/auth.php';
