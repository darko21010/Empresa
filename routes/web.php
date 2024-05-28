<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog.blog');
})->name('blog');  // Asignar nombre 'login' a la ruta de login

Route::get('/clients', function () {
    return view('clients.clients');
})->name('clients');  // Asignar nombre 'login' a la ruta de login

Route::get('/contacts', function () {
    return view('contacts.contacts');
})->name('contacts');  // Asignar nombre 'login' a la ruta de login

Route::get('/proyects', function () {
    return view('proyects.proyects');
})->name('proyects');  // Asignar nombre 'login' a la ruta de login

Route::get('/services', function () {
    return view('services.services');
})->name('services');  // Asignar nombre 'login' a la ruta de login
