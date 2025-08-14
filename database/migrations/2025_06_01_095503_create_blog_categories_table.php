<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogCategoriesTable extends Migration
{
    public function up()
    {
        Schema::create('blog_categories', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name', 255);
            $table->string('slug', 255);
            $table->integer('parent')->default(0);
            $table->mediumText('description')->nullable();
            $table->integer('visible_status')->default(1)->comment('1 => Enable, 2 => Disable');
            $table->string('image', 255)->nullable();
            $table->string('link', 255)->nullable();

            // created_at/updating, updated_at behavior
            $table->timestamp('created_at')->useCurrent()->useCurrentOnUpdate();
            $table->timestamp('updated_at')->useCurrent();

            $table->string('loading_type', 255)->nullable();
            $table->string('image_height', 255)->nullable();
            $table->string('image_width', 255)->nullable();
            $table->string('image_alt', 255)->nullable();
            $table->string('image_title', 255)->nullable();
        });
    }

    public function down()
    {
        if (Schema::hasTable('blog_categories')) {
            Schema::dropIfExists('blog_categories');
        }
    }
}
