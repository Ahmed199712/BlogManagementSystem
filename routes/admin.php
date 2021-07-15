<?php





Route::group(
[
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
],
function()
{
    // Here Put Your All Routes ..

    Route::group(['prefix' => 'admin' , 'namespace' => 'Admin'] , function(){

    
        
        Route::get('/login' , 'AdminAuthController@login')->name('admin.login')->middleware('guestAdmin');
        Route::post('/doLogin' , 'AdminAuthController@doLogin')->name('admin.doLogin');
        Route::any('/logout' , 'AdminAuthController@logout')->name('admin.logout');
    
        Route::group(['middleware' => 'admin:admin'] , function(){
            
            
            
            // All Authenticated Routes Here ...
            Route::get('/' , 'AdminAuthController@index')->name('admin.dashboard');

            // Admins Routes ..
            Route::resource('admins' , 'AdminController');

            // Admins Groups Routes ..
            Route::resource('admingroup' , 'AdminGroupController')->except(['show']);

            // Users Routes ..
            Route::resource('users' , 'UserController');
            

            // Categories Routes ...
            Route::resource('categories','CategoryController');
            
            // Tasg Routes ...
            Route::resource('tags','TagController');

            // Posts Routes ..
            Route::resource('posts' , 'PostController');

            // Comments Routes ..
            Route::resource('comments' , 'CommentController');

            // Comments Reply Routes ..
            Route::get('reply' , 'CommentReplyController@index')->name('reply.index');
            Route::delete('reply/destroy/{id}' , 'CommentReplyController@destroy')->name('reply.destroy');

            // Messages Routes ..
            Route::resource('messages' , 'MessageController')->except(['create','store','update']);

            // Messages Routes ..
            Route::resource('abouts' , 'AboutController');

            // Sliders Routes ..
            Route::resource('sliders' , 'SliderController');

            // Settings Controller 
            Route::get('/settings' , 'SettingController@index')->name('settings.index');
            Route::post('/settings/update' , 'SettingController@update')->name('settings.update');

            // Profile Controller 
            Route::get('/profile' , 'ProfileController@index')->name('profile.index');
            Route::post('/profile/update' , 'ProfileController@update')->name('profile.update');
            


        });
        
    
    
    });


});