<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AdminGroup extends Model
{

    protected $table = 'admin_groups';

    protected $fillable = [
        
        'name' ,
        
        // Admin Colum
        'show_admin' ,
        'create_admin' ,
        'edit_admin' ,
        'delete_admin' ,

        // Admin Grou Colum
        'show_admingroup' ,
        'create_admingroup' ,
        'edit_admingroup' ,
        'delete_admingroup' ,

        // Category Colum
        'show_category' ,
        'create_category' ,
        'edit_category' ,
        'delete_category' ,

        // About Colum
        'show_about' ,
        'create_about' ,
        'edit_about' ,
        'delete_about' ,

        // Comment Colum
        'show_comment' ,
        'create_comment' ,
        'edit_comment' ,
        'delete_comment' ,

        // Comment Repy Colum
        'show_commentreply' ,
        'create_commentreply' ,
        'edit_commentreply' ,
        'delete_commentreply' ,


        // Message Colum
        'show_message' ,
        'create_message' ,
        'edit_message' ,
        'delete_message' ,


        // Posts Colum
        'show_post' ,
        'create_post' ,
        'edit_post' ,
        'delete_post' ,

        // Slider Colum
        'show_slider' ,
        'create_slider' ,
        'edit_slider' ,
        'delete_slider' ,

        // Tag Colum
        'show_tag' ,
        'create_tag' ,
        'edit_tag' ,
        'delete_tag' ,

        // User Colum
        'show_user' ,
        'create_user' ,
        'edit_user' ,
        'delete_user' ,

        // Setting Colum
        'show_setting' ,
        'edit_setting' ,
    ];
}
