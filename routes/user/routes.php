<?php
/**
 * Created by IntelliJ IDEA.
 * User: BSCAKO
 * Date: 15/05/2018
 * Time: 16:13
 */

Route::group(['middleware' => ['auth']],function (){
    Route::get('/', function () {
        return view('welcome');
    });
    Route::get('/home', 'HomeController@index')->name('home');

});