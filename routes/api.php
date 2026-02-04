<?php
use App\Http\Controllers\Api\LeadsApiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;

Route::get('/leads', [LeadsApiController::class, 'index']);

Route::post('/leads', [LeadController::class, 'store']);

// Route::post('/leads', [LeadsApiController::class, 'store']);
