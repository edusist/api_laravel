<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\ApiController;

Route::get("/api-externa", [ApiController::class, "index"])->name("index");

// class

// Route::get('/teste', function () {
//     return response()->json([
//         'mensagem' => 'API funcionando'
//     ]);
// });