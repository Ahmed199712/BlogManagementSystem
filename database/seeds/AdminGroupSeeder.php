<?php

use Illuminate\Database\Seeder;
use App\Model\AdminGroup;

class AdminGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdminGroup::create([

            'name' => 'Admin',
        
            // Admin Colum
            'show_admin' => 'enable' ,
            'create_admin' => 'enable' ,
            'edit_admin' => 'enable' ,
            'delete_admin' => 'enable' ,

            // Admin Grou Colum
            'show_admingroup' => 'enable' ,
            'create_admingroup' => 'enable' ,
            'edit_admingroup' => 'enable' ,
            'delete_admingroup' => 'enable' ,

            // Category Colum
            'show_category' => 'enable' ,
            'create_category' => 'enable' ,
            'edit_category' => 'enable' ,
            'delete_category' => 'enable' ,

            // About Colum
            'show_about' => 'enable' ,
            'create_about' => 'enable' ,
            'edit_about' => 'enable' ,
            'delete_about' => 'enable' ,

            // Comment Colum
            'show_comment' => 'enable' ,
            'create_comment' => 'enable' ,
            'edit_comment' => 'enable' ,
            'delete_comment' => 'enable' ,

            // Comment Repy Colum
            'show_commentreply' => 'enable' ,
            'create_commentreply' => 'enable' ,
            'edit_commentreply' => 'enable' ,
            'delete_commentreply' => 'enable' ,


            // Message Colum
            'show_message' => 'enable' ,
            'create_message' => 'enable' ,
            'edit_message' => 'enable' ,
            'delete_message' => 'enable' ,


            // Posts Colum
            'show_post' => 'enable' ,
            'create_post' => 'enable' ,
            'edit_post' => 'enable' ,
            'delete_post' => 'enable' ,

            // Slider Colum
            'show_slider' => 'enable' ,
            'create_slider' => 'enable' ,
            'edit_slider' => 'enable' ,
            'delete_slider' => 'enable' ,

            // Tag Colum
            'show_tag' => 'enable' ,
            'create_tag' => 'enable' ,
            'edit_tag' => 'enable' ,
            'delete_tag' => 'enable' ,

            // User Colum
            'show_user' => 'enable' ,
            'create_user' => 'enable' ,
            'edit_user' => 'enable' ,
            'delete_user' => 'enable' ,

            // Setting Colum
            'show_setting' => 'enable' ,
            'edit_setting' => 'enable' ,
        ]);
    }
}
