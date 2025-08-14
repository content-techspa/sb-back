<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogTagsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('blog_tags', function (Blueprint $table) {
            $table->increments('id'); // unsigned INT(10) auto-increment
            $table->string('name', 191);
            $table->string('slug', 255)->nullable();
            $table->string('description', 191)->nullable();
            $table->integer('status')->default(1)->comment('1 => Enable, 2 => Disable');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('blog_tags');
    }
}
