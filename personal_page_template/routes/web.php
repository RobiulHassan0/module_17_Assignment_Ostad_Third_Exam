<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get("/", [FrontendController::class, 'home']);

Route::get("/resume", [FrontendController::class, 'resume']);

Route::get("/projects", [FrontendController::class, 'projects']);

Route::get("/contact", [FrontendController::class, 'contact']);

