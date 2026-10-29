<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', function() {
    echo 'This is the contacts page';
})->name('contacts');

Route::get('/page-not-found', function() {
    echo 'Тhe page was not found';
})->name('error');

Route::get('/products/{id}', function($id) {
    if ($id > 3) {
        return redirect()->route('error');
    }

    if ($id < 3) {
        echo 'Product was found with id: ' . $id;
    }
})->name('products');
