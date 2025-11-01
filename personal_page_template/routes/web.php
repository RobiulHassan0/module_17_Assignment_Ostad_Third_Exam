<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

// Route::get('/info', function (Request $request) {

//     $name = $request->query('name');
//     $email = $request->query('email');

//     $request->session()->put('name', $name);
//     $request->session()->put('email', $email);

//     Log::info('User Info:', ['name' => $name, 'email' => $email]);

//     return response()->json([
//         'status' => 'success',
//         'message' => 'User info stored in session and logged.',
//         'code' => 201
//     ]);
// });

Route::get('/dashboard', function () {
    return view('dashboard');
});