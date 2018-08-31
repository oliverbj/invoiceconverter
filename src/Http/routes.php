<?php

Route::group(['middleware' => ['web', 'auth']], function () {
    Route::get('/invoice', 'InvoiceController@index');
});
