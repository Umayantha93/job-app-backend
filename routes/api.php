<?php

use App\Http\Controllers\JobController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::post('job/create', [JobController::class, 'store']);
Route::get('jobs/filter', [JobController::class, 'fetch']);
Route::get('jobs/list', [JobController::class, 'index']);
