<?php

use App\Http\Controllers\PredictController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    $history = auth()->user()->history()->latest()->paginate(15);

    return view('dashboard', [
        'history' => $history,
        'entries' => $history->total(),
    ]);
})->middleware(['auth'])
    ->name('dashboard');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::post('/predict', PredictController::class)
    ->name('predict')
    ->middleware(['auth']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
