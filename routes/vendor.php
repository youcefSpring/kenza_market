<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\LaravelLocalization;

Route::group(['namespace' => 'Vendor' , 'middleware'=> 'auth:vendor', 'prefix'=>'vendeur'], function () {

    Route::view('/', 'Vendor.indexVendor')->name('vendor.dashboard');

    Route::get('/logout','LoginController@logout')->name('vendor.logout');


    Route::group(['prefix' => 'products'], function () {
        Route::get('/', function(){
            return view('Vendor.Products.index');
        })->name('vendor.ProductList');

        Route::get('/searchProduct', 'ProductController@action')->name('vendor.searchProduct');
    });


    Route::group(['prefix' => 'sales'], function () {
        Route::get('/','SaleController@index')->name('vendor.SaleList');

        Route::get('create','SaleController@create')->name('vendor.SaleCreate');

        Route::post('store','SaleController@store')->name('vendor.SaleStore');

        Route::get('edit/{id}','SaleController@edit')->name('vendor.SaleEdit');

        Route::post('update/{id}','SaleController@update')->name('vendor.SaleUpdate');

        Route::get('delete/{id}','SaleController@delete')->name('vendor.SaleDelete');

        Route::get('changeStatus','SaleController@changeStatus')->name('vendor.SaleChangeStatus');

        Route::get('/searchProduct', 'SaleController@action')->name('searchSale');


    });


    ###################### profile Route ###############################
    Route::group(['prefix' => 'profile'], function () {
        Route::get('edit','ProfileController@editProfile')->name('vendor.editProfile');
        Route::put('update','ProfileController@updateProfile')->name('vendor.updateProfile');

    });
    ##################### end profile Routes ##########################



});





