<?php


Route::group(['namespace' => 'Test\Contactus\Http\Controllers', 'prefix' => 'contactus'], function(){
    Route::get('/', 'ContactusController@index');
    Route::post('send-mail', 'ContactusController@send_form')->name('send-mail');
});