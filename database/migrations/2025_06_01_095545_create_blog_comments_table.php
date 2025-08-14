<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogCommentsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('blog_comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->unsignedBigInteger('blog_id');
            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('website', 255)->nullable();
            $table->integer('mobile')->nullable();
            $table->mediumText('comment');
            $table->integer('status')->default(1)->comment('1 => Enable, 2 => Disable');
            
            // Keep created_at as non-nullable datetime
            $table->dateTime('created_at');
            
            // Use a nullable timestamp for updated_at (no '0000-00-00 00:00:00' default)
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('blog_comments');
    }
}
