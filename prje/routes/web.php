<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::namespace('Frontend')->group(function () {
    Route::get('/','\App\Http\Controllers\Frontend\DefaultController@index')->name('home.Index');

    //BLOG
    Route::get('/blog','\App\Http\Controllers\Frontend\BlogController@index')->name('blog.Index');
    Route::get('/blog/{slug}','\App\Http\Controllers\Frontend\BlogController@detail')->name('blog.Detail');

    //PAGE
    Route::get('/page/{slug}','\App\Http\Controllers\Frontend\PageController@detail')->name('page.Detail');

    //CONTACT
    Route::get('/contact','\App\Http\Controllers\Frontend\DefaultController@contact')->name('contact.Detail');
    Route::post('/contact','\App\Http\Controllers\Frontend\DefaultController@sendMail');
    Route::post('/message','\App\Http\Controllers\Backend\MessagesController@message')->name('message.Send');
   // Route::post('/veriler', 'VeriController@store')->name('veriler.store');

});

Route::get('admin', 'Backend\DefaultController@index')->name('admin.Index');
Route::namespace ('Backend')->group(function () {


    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', '\App\Http\Controllers\Backend\DefaultController@index')->name('admin.index')->middleware('admin');
        Route::get('/', '\App\Http\Controllers\Backend\DefaultController@login')->name('admin.Login');
        Route::get('/logout', '\App\Http\Controllers\Backend\DefaultController@logout')->name('admin.Logout');
        Route::post('/login', '\App\Http\Controllers\Backend\DefaultController@authenticate')->name('admin.Authenticate');
    });


        Route::middleware(['admin'])->group(function () {
            Route::prefix('admin/settings')->group(function () {
                Route::get('','\App\Http\Controllers\Backend\SettingsControler@index')->name('settings');
                Route::post('sortable','\App\Http\Controllers\Backend\SettingsControler@sortable')->name('settings.Sortable');
                Route::get('delete/{id}','\App\Http\Controllers\Backend\SettingsControler@destroy')->name('settings.Destroy');
                Route::get('/edit/{id}','\App\Http\Controllers\Backend\SettingsControler@edit')->name('settings.Edit');
                Route::post('update/{id}','\App\Http\Controllers\Backend\SettingsControler@update')->name('settings.Update');
        });
    });
});
Route::namespace('Backend')->group(function() {
    Route::prefix('admin')->group(function(){
        Route::post('/blog/sortable','\App\Http\Controllers\Backend\BlogController@sortable')->name('blog.Sortable');
        Route::resource('blog','\App\Http\Controllers\Backend\BlogController');

        Route::middleware(['admin'])->group(function () {
        //PAGE
        Route::post('/page/sortable', '\App\Http\Controllers\Backend\PageController@sortable')->name('page.Sortable');
        Route::resource('page', '\App\Http\Controllers\Backend\PageController');
        //slider
        Route::post('/slider/sortable', '\App\Http\Controllers\Backend\SliderController@sortable')->name('slider.Sortable');
        Route::resource('slider', '\App\Http\Controllers\Backend\SliderController');
        //admin
        Route::post('/user/sortable', '\App\Http\Controllers\Backend\UserController@sortable')->name('user.Sortable');
        Route::resource('user', '\App\Http\Controllers\Backend\UserController');
        //mesaj
        Route::get('/mesaj','\App\Http\Controllers\Backend\MessagesController@mesaj')->name('Message');
        });
    });
});


Auth::routes();

