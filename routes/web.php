<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\Dashboard\DocumentController;


Route::resource('produits', ProduitController::class);
Route::resource('magasins', MagasinController::class);
Route::resource('categories', CategoryController::class);
Route::resource('commandes', CommandeController::class);
Route::resource('fraudes', FraudeController::class);


Route::view('/','front.index')->name('/');
Route::view('/login','Dashboard.auth.login')->name('/login');

Route::get('/c', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});


Route::get('autocomplete', 'Dashboard\DocumentController@autocomplete')->name('autocomplete');
Route::get('detail', 'Dashboard\DocumentController@detail')->name('doc_detail');






