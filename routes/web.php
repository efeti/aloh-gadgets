<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('admin_dashboard', function(){
    return view('admin.dashboard');
});
