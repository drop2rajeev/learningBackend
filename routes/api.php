<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/users', function () {
    return response()->json([
        'status' => true,
        'message' => 'Your Users API working successfully',
        'data' => User::latest('id')->paginate(25)
    ]);
});
