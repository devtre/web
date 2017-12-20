<?php


/*
 * 前台
 */
Route::namespace('home')->group(function () {
    Route::resource('/', 'IndexController');
});
