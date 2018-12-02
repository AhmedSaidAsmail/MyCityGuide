<?php

Route::get('/', function () {
    return "";
})->name('home');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\LoginController@login')->name('admin.login');
Route::group(['prefix' => 'admin', 'middleware' => 'auth:web'], function () {
    Route::get('/logout', 'Auth\LoginController@logout')->name('admin.logout');
    Route::get('', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::resource('customer', 'Admin\CustomerController');
    Route::resource('company', 'Admin\CompanyController');
});
Route::get('customer/verify/{qr_code}', 'Admin\CustomerController@verify')->name('customer.verify');