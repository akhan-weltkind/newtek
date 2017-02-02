<?php


Route::localizedGroup(function () {
    Route::group(['prefix' => config('cms.uri')], function() {
        Route::resource('project', 'Admin\IndexController');

        Route::put('project/priority/{id}/{direction}', 'Admin\IndexController@priority')->name('admin.project.priority');
        Route::delete('project/delete-upload/{id}/{field}', 'Admin\IndexController@deleteUpload')->name('admin.project.delete-upload');
        Route::resource('project.images', 'Admin\ImagesController');


    });

  /*  Route::get('project/show/{$id}',['as' => 'project.show', 'uses' => 'IndexController@show']);*/
 /*   Route::get('projects/list',['as' => 'project.list', 'uses' => 'IndexController@list']);*/
});
