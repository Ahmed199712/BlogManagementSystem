<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::group(['middleware' => 'WebsiteStatus'] , function(){
    Auth::routes();
});


Route::group(['namespace' => 'Frontend' , 'middleware' => 'WebsiteStatus'] , function(){
    
    
    // Home Page Route ..
    Route::get('/' , 'FrontendController@index')->name('frontend.index');
    
    // Static Pages ...
    Route::get('/about' , 'PageController@about')->name('pages.about');
    Route::get('/contact' , 'PageController@contact')->name('pages.contact');
    Route::post('/contact/save' , 'PageController@saveContact')->name('contact.save');

    
    
    // Posts Routes ...
    Route::get('/posts' , 'PostController@index')->name('frontend.posts.index');
    Route::get('/posts/like' , 'PostController@postLike')->name('frontend.post.like');
    Route::get('/posts/dislike' , 'PostController@postDisLike')->name('frontend.post.dislike');
    Route::get('/posts/get/search' , 'PostController@getSearch')->name('frontend.posts.get.search');
    Route::get('/posts/search' , 'PostController@search')->name('frontend.posts.search');
    Route::get('/posts/{slug}' , 'PostController@show')->name('frontend.posts.show');


    // Comments ...
    Route::post('user/comments/save' , 'PageController@saveComment')->name('frontend.comments.save');
    Route::get('user/delete/comment','PageController@deleteComment')->name('frontend.delete.comments');
    Route::get('user/edit/comment','PageController@editComment')->name('frontend.edit.comments');
    Route::get('user/update/comment','PageController@updateComment')->name('frontend.comments.update');

    // Comments Reply...
    Route::post('user/comment/reply' , 'PageController@saveCommentReply')->name('frontend.comments.reply.save');

    // Get Posts By Category ...
    Route::get('posts/category/{slug}' , 'PostController@getPostsByCategory')->name('getPostsByCategory');

    // Get Posts By Tag ...
    Route::get('posts/tag/{slug}' , 'PostController@getPostsByTag')->name('getPostsByTag');


    // Profile ...
    
    Route::get('/profile', 'ProfileController@index')->name('frontend.profile.index');
    Route::post('/profile/update' , 'ProfileController@updateProfile')->name('frontend.profile.update');
    Route::any('/user/logout' , 'ProfileController@userLogout')->name('frontend.user.logout');
    

    
});


// Maintenance
Route::get('/maintenance',function(){
    return view('Frontend.maintenance');
})->name('maintenance');

