<?php

use App\Http\Controllers\Api\ExpenseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('catat', [ExpenseController::class, 'store']);
Route::get('laporan', [ExpenseController::class, 'allRecords']);
Route::get('laporanHarian', [ExpenseController::class, 'todayRecords']);
Route::get('laporanBulanan', [ExpenseController::class, 'monthRecords']);
