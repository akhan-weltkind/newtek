<?php
Route::localizedGroup(function () {

    Route::group(['prefix' => config('cms.uri')], function() {
        Route::resource('banner', 'Admin\IndexController');
        Route::put('banner/priority/{id}/{direction}', 'Admin\IndexController@priority')->name('admin.banner.priority');
        Route::delete('banner/delete-upload/{id}/{field}', 'Admin\IndexController@deleteUpload')->name('admin.banner.delete-upload');
        Route::get('banner/clear/{id}/{field}', 'Admin\IndexController@viewsClear')->name('admin.banner.views-clear');
    });

});