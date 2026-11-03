<?php

use Illuminate\Support\Facades\Route;

Route::get('/users', function () {
    return response()->json([
        'status' => true,
        'message' => 'Users API working successfully',
        'data' => []
    ]);
});