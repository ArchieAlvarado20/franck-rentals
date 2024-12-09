<?php

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', Index::class);


Route::middleware('guest')->group(function (){
    Route::get('/login', Login::class)->name('login');
    Route::get('/register', Register::class);
});

Route::middleware('auth')->group(function (){
    Route::get('/logout', function(){
            auth()->logout();
            return Redirect('/');
    });
});

