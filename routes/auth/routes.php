<?php
/**
 * Created by IntelliJ IDEA.
 * User: BSCAKO
 * Date: 15/05/2018
 * Time: 16:13
 */

Auth::routes();
Route::get('/User/confirm/{token}', 'Auth\RegisterController@verifyUser');