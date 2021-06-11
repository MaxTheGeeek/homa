<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



//////////User Interface template

Route::get('/', 'App\HomeController@index');

/////////Admin panel template

Route::get('/admin', 'Admin\PanelController@index');

Route::group(
    ['namespace' => 'App\Http\Controllers', 'middleware' => ['auth:web'], 'prefix' => 'admin', 'as' => 'admin.'],
    function () {
    }
);

Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {
    // Authentication Routes...
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login');

    Route::get('logout', 'LoginController@logout')->name('logout');
    // Registration Routes...
    Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'RegisterController@register');
    // ResetPassword Routes...
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset')->name('password.update');
});

Auth::routes();

// Route::get('/home', 'App\HomeController@index')->name('home');
