<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/vue', function () {
    return view('app');
})
->name('application');

Route::get('/about', function () {
    return view('Pages.Main.EN.AboutUs');
});

Route::get('/blog', function () {
    return view('Pages.Main.EN.Blog');
});


Route::get('/contact', function () {
    return view('Pages.Main.EN.Contact');
});

Route::get('/event', function () {
    return view('Pages.Main.EN.Event');
});

Route::get('/projects', function () {
    return view('Pages.Main.EN.Projects');
});

Route::get('/project-details', function () {
    return view('Pages.Main.EN.Project-details');
});


