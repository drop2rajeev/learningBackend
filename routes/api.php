<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/users', function () {
    return response()->json([
        'status' => true,
        'message' => 'User LISTS',
        'data' => User::latest('id')->paginate(25)
    ]);
});
