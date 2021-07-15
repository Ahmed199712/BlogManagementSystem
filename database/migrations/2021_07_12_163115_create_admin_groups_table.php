<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_groups', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name');

            // Admin Colum
            $table->enum('show_admin' , ['enable','disable'])->default('disable');
            $table->enum('create_admin' , ['enable','disable'])->default('disable');
            $table->enum('edit_admin' , ['enable','disable'])->default('disable');
            $table->enum('delete_admin' , ['enable','disable'])->default('disable');

            // Admin Grou Colum
            $table->enum('show_admingroup' , ['enable','disable'])->default('disable');
            $table->enum('create_admingroup' , ['enable','disable'])->default('disable');
            $table->enum('edit_admingroup' , ['enable','disable'])->default('disable');
            $table->enum('delete_admingroup' , ['enable','disable'])->default('disable');

            // Category Colum
            $table->enum('show_category' , ['enable','disable'])->default('disable');
            $table->enum('create_category' , ['enable','disable'])->default('disable');
            $table->enum('edit_category' , ['enable','disable'])->default('disable');
            $table->enum('delete_category' , ['enable','disable'])->default('disable');

            // About Colum
            $table->enum('show_about' , ['enable','disable'])->default('disable');
            $table->enum('create_about' , ['enable','disable'])->default('disable');
            $table->enum('edit_about' , ['enable','disable'])->default('disable');
            $table->enum('delete_about' , ['enable','disable'])->default('disable');

            // Comment Colum
            $table->enum('show_comment' , ['enable','disable'])->default('disable');
            $table->enum('create_comment' , ['enable','disable'])->default('disable');
            $table->enum('edit_comment' , ['enable','disable'])->default('disable');
            $table->enum('delete_comment' , ['enable','disable'])->default('disable');

            // Comment Repy Colum
            $table->enum('show_commentreply' , ['enable','disable'])->default('disable');
            $table->enum('create_commentreply' , ['enable','disable'])->default('disable');
            $table->enum('edit_commentreply' , ['enable','disable'])->default('disable');
            $table->enum('delete_commentreply' , ['enable','disable'])->default('disable');


            // Message Colum
            $table->enum('show_message' , ['enable','disable'])->default('disable');
            $table->enum('create_message' , ['enable','disable'])->default('disable');
            $table->enum('edit_message' , ['enable','disable'])->default('disable');
            $table->enum('delete_message' , ['enable','disable'])->default('disable');


            // Posts Colum
            $table->enum('show_post' , ['enable','disable'])->default('disable');
            $table->enum('create_post' , ['enable','disable'])->default('disable');
            $table->enum('edit_post' , ['enable','disable'])->default('disable');
            $table->enum('delete_post' , ['enable','disable'])->default('disable');

            // Slider Colum
            $table->enum('show_slider' , ['enable','disable'])->default('disable');
            $table->enum('create_slider' , ['enable','disable'])->default('disable');
            $table->enum('edit_slider' , ['enable','disable'])->default('disable');
            $table->enum('delete_slider' , ['enable','disable'])->default('disable');

            // Tag Colum
            $table->enum('show_tag' , ['enable','disable'])->default('disable');
            $table->enum('create_tag' , ['enable','disable'])->default('disable');
            $table->enum('edit_tag' , ['enable','disable'])->default('disable');
            $table->enum('delete_tag' , ['enable','disable'])->default('disable');

            // User Colum
            $table->enum('show_user' , ['enable','disable'])->default('disable');
            $table->enum('create_user' , ['enable','disable'])->default('disable');
            $table->enum('edit_user' , ['enable','disable'])->default('disable');
            $table->enum('delete_user' , ['enable','disable'])->default('disable');

            // Setting Colum
            $table->enum('show_setting' , ['enable','disable'])->default('disable');
            $table->enum('edit_setting' , ['enable','disable'])->default('disable');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin_groups');
    }
}
