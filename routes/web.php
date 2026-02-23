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