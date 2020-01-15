<?php

Route::prefix('/')->name('site.')->namespace('Site')
    ->group(function () {
        Route::get('/', 'SiteController@index');
        Route::get('/brand', 'SiteController@sidebar');
    });

Auth::routes();

Route::prefix('admin')->name('admin.')->namespace('Admin')
    ->middleware(['auth', 'can:list-role'])->group(function () {
        Route::get('/', 'DashController@index');
        Route::resource('/users', 'UserController', ['except' => ['create', 'store']]);
        Route::resource('/roles', 'RoleController');
        Route::resource('/category', 'CategoryController', ['except' => ['show']]);
        Route::resource('/brand', 'BrandController', ['except' => ['show']]);
        Route::resource('/product', 'ProductController');
    });
