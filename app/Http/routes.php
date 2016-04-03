<?php

Route::get('/',['uses'=>'ImageController@index']);
Route::post('/',['uses'=>'ImageController@upload']);
