<?php

use Illuminate\Http\Request;

Route::group(['namespace' => 'Bitfumes\Blog\Http\Controllers'], function () {
    
    Route::get('category', 'BlogCategoryController@index')->name('category');
    Route::get('category/create', 'BlogCategoryController@create')->name('categorycreate');
    Route::get('category/edit/{id}', 'BlogCategoryController@edit')->name('categoryedit');
    Route::post('category', 'BlogCategoryController@store');
    Route::patch('category/update/{id}', 'BlogCategoryController@update')->name('categoryupdate');

    Route::get('blogpost', 'BlogPostController@index')->name('blogpost');
    Route::get('blogpost/create', 'BlogPostController@create')->name('blogpostcreate');
    Route::get('blogpost/edit/{id}', 'BlogPostController@edit')->name('blogpostedit');
    Route::post('blogpost', 'BlogPostController@store');
    Route::patch('blogpost/update/{id}', 'BlogPostController@update')->name('blogpostupdate');
});

