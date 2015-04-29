<?php
Route::get('/', array('uses' => 'HomeController@index', 'as' => 'home'));

Route::get('/group/{id}', array('uses' => 'GroupController@show', 'as' => 'group-show'));

Route::group(array('before' => 'csrf'), function()
{
    Route::post('/group/{id}', array('uses' => 'GroupController@show', 'as' => 'group-show'));
});