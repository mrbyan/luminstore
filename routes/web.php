<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/home', 'home');
Route::view('/login', 'auth.login');
Route::view('/signup', 'auth.signup');
Route::view('/forgot_password', 'auth.forgot_password');
Route::view('/reset_password', 'auth.reset_password');
Route::view('/order', 'profile.order');
Route::view('/wishlist', 'profile.wishlist');
Route::view('/shipping_address', 'profile.shipping_address');
Route::view('/empty_state', 'profile.empty_state');
Route::view('/account_detail', 'profile.account_detail');
Route::view('/change_password', 'profile.change_password');
