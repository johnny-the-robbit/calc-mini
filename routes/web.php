<?php

Route::group(['prefix' => 'api', 'namespace' => 'API'], function () {
    Route::get('calc/add/{a}/{b}', 'CalcController@addition');
    Route::get('calc/subtract/{a}/{b}', 'CalcController@subtract');
    Route::get('calc/multiply/{a}/{b}', 'CalcController@multiply');
    Route::get('calc/division/{a}/{b}', 'CalcController@division');
});

Route::get('/', function () {
    return view('welcome');
});
