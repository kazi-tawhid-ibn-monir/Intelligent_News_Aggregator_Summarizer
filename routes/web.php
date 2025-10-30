<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/summarizer', function () {
    return view('summarizer.index');
});

Route::get('/category/{category}', function ($category) {
    return view('category.show', ['category' => $category]);
});

Route::get('/chat', function () {
    return view('chat.index');
});

Route::get('/admin', function () {
    return view('admin.dashboard');
});
