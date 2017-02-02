<?php
Route::localizedGroup(function () {
    Route::group(['prefix' => config('cms.uri')], function() {
        Route::resource('category', 'Admin\IndexController');
        Route::put('category/priority/{id}/{direction}', 'Admin\IndexController@priority')->name('admin.category.priority');
    });

});
