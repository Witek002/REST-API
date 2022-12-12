<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

Route::get('witek/305424/person', [PersonController::class, 'index']);
Route::get('witek/305424/person/{person}', [PersonController::class, 'show']);
Route::post('witek/305424/person', [PersonController::class, 'create']);
Route::put('witek/305424/person/{person}', [PersonController::class, 'update']);
Route::delete('witek/305424/person/{person}', [PersonController::class, 'destroy']);
