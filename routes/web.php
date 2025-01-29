<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServersController;

Route::get('/', function () {
    return view('welcome');
});

// Route::group(['middleware' => ['role:admin']], function () { 
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->middleware(['auth', 'verified'])->name('dashboard');
// });

// Route::group(['middleware' => ['role:manager']], function () { 
//     Route::get('/manager', function () {
//         return view('dashboard');
//     })->middleware(['auth', 'verified'])->name('dashboard');
// });

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Servers Routes
    Route::get('/servers', [ServersController::class, 'index'])->name('servers.index');
    Route::get('/servers-list', [ServersController::class, 'list'])->name('servers.list');
    Route::post('/servers', [ServersController::class, 'store'])->name('servers.store');
});

// Route::get('forget', function () {
//     return view('auth.forget');
// })->name('forget');

// Route::get('reset', function () {
//     return view('auth.reset');
// })->name('reset');
require __DIR__.'/auth.php';
