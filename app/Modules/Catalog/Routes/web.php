<?php
Route::localizedGroup(function () {

    Route::group(['prefix' => config('cms.uri')], function() {
        Route::resource('catalog', 'Admin\IndexController');
        Route::delete('catalog/delete-upload/{id}/{field}', 'Admin\IndexController@deleteUpload')->name('admin.catalog.delete-upload');
    });

    Route::get('catalog','IndexController@index')->name('catalog');
    Route::get('catalog/{category}','IndexController@category')->name('catalog.list');
    Route::get('catalog/{category}/{id}','IndexController@product')->name('catalog.show');

});