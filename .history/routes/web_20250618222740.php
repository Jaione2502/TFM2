<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/bebida', function () {
    return view('carta.bebida');
})->name('bebida');

Route::get('/desayuno', function () {
    return view('carta.desayuno');
})->name('desayuno');

Route::get('/comida', function () {
    return view('carta.comida');
})->name('comida');

Route::get('/cena', function () {
    return view('carta.cena');
})->name('cena');

Route::get('/postre', function () {
    return view('carta.postre');
})->name('postre');

Route::get('/buscador', function () {
    return view('buscador.buscador');
})->name('buscador');

Route::get('/receta', function () {
    return view('receta.recetaPopulares');
})->name('recetaPopulares');

Route::get('/receta', function () {
    return view('recetas');
})->name('recetaPopulares');

Route::get('/about', function () {
    return view('about.nosotros');
})->name('nosotros');

Route::get('/contact', function () {
    return view('contact.contacto');
})->name('contacto');

Route::get('/contact/news', function () {
    return view('contact.newsletter');
})->name('newsletter');




