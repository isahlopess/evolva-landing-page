<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::post('/subscribe', function (Request $request) {
    try {
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        ]);

        return response()->json(['message' => 'Subscrição bem-sucedida! Bem-vindo!'], 200);

    } catch (ValidationException $e) {
        return response()->json([
            'message' => 'Erro de validação',
            'errors' => $e->errors()
        ], 422);
    }
})->name('subscribe');

require __DIR__.'/auth.php';
