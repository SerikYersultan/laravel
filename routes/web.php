<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Данные, которые мы отправляем на страницу
    $name = "Ерсултан";
    $role = "student"; 
    $skills = ['Linux', 'Ubuntu', 'Basic PHP', 'HTML/CSS'];

    // Функция compact упаковывает переменные и отправляет их в view
    return view('welcome', compact('name', 'role', 'skills'));
});
Route::get('/inactive', function () {
    return 'Your account is inactive.';
});

Route::middleware(['check.account'])->group(function () {
    Route::get('/dashboard', function () {
        return 'Welcome to dashboard!';
    });
});
