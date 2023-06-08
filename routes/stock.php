<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\LaravelLocalization;

Route::group(['namespace' => 'Stock' , 'middleware'=> 'auth:stock', 'prefix'=>'stock'], function () {

    Route::view('/', 'Stock.indexStock')->name('stock.dashboard');

    Route::get('/logout','LoginController@logout')->name('stock.logout');




    Route::group(['prefix' => 'products'], function () {
        Route::get('/','ProductController@index')->name('stock.ProductList');

        Route::get('create','ProductController@create')->name('stock.ProductCreate');

        Route::post('store','ProductController@store')->name('stock.ProductStore');

        Route::get('edit/{id}','ProductController@edit')->name('stock.ProductEdit');

        Route::post('update/{id}','ProductController@update')->name('stock.ProductUpdate');

        Route::get('delete/{id}','ProductController@delete')->name('stock.ProductDelete');

        Route::get('changeStatus','ProductController@changeStatus')->name('stock.ProductChangeStatus');

        Route::get('/searchProduct', 'ProductController@action')->name('searchProduct');


    });
    Route::group(['prefix' => 'providers'], function () {
        Route::get('/','ProviderController@index')->name('stock.ProviderList');

        Route::get('create','ProviderController@create')->name('stock.ProviderCreate');

        Route::post('store','ProviderController@store')->name('stock.ProviderStore');

        Route::get('edit/{id}','ProviderController@edit')->name('stock.ProviderEdit');

        Route::post('update/{id}','ProviderController@update')->name('stock.ProviderUpdate');

        Route::get('delete/{id}','ProviderController@delete')->name('stock.ProviderDelete');

        Route::get('changeStatus','ProviderController@changeStatus')->name('stock.ProviderChangeStatus');

        Route::get('/searchProduct', 'ProviderController@action')->name('searchProvider');


    });
    Route::group(['prefix' => 'deliveries'], function () {
        Route::get('/','DeliveryController@index')->name('stock.DeliveryList');

        Route::get('create','DeliveryController@create')->name('stock.DeliveryCreate');

        Route::post('store','DeliveryController@store')->name('stock.DeliveryStore');

        Route::get('edit/{id}','DeliveryController@edit')->name('stock.DeliveryEdit');

        Route::post('update/{id}','DeliveryController@update')->name('stock.DeliveryUpdate');

        Route::get('delete/{id}','DeliveryController@delete')->name('stock.DeliveryDelete');

        Route::get('changeStatus','DeliveryController@changeStatus')->name('stock.DeliveryChangeStatus');

        Route::get('/searchProduct', 'DeliveryController@action')->name('searchDelivery');


    });





    Route::group(['prefix' => 'providers'], function () {
        Route::view('/list','Dashboard.Providers.index')->name('admin.ProviderList');
        Route::get('/live_search', 'ProviderController@list')->name('admin.ProviderSearch');

    });

    ###################### profile Route ###############################
    Route::group(['prefix' => 'profile'], function () {
        Route::get('edit','ProfileController@editProfile')->name('stock.editProfile');
        Route::put('update','ProfileController@updateProfile')->name('stock.updateProfile');

    });
    ##################### end profile Routes ##########################



});


