<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');

            // Title & Slug
            $table->string('title', 255);
            $table->string('slug', 255)->unique();

            // Small description (varchar up to 1000)
            $table->string('small_description', 1000)->nullable();

            // Full content
            $table->longText('description')->nullable();

            // Featured image path
            $table->string('featured_image', 255);

            // Foreign key to blog_categories.id
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
                  ->references('id')
                  ->on('blog_categories')
                  ->onDelete('cascade');

            // SEO fields
            $table->string('page_title', 255)->nullable();
            $table->text('page_keyword')->nullable();
            $table->text('page_description')->nullable();

            // allow_comments: store as boolean
            $table->boolean('allow_comments')->default(true);

            // visibility: 1 = enabled, 2 = disabled
            $table->unsignedTinyInteger('visibility')->default(1);

            // Timestamps
            $table->timestamps();
        });
    }

    public function down()
    {
        // Only remove the FK if the table still exists
        if (Schema::hasTable('blogs')) {
            Schema::table('blogs', function (Blueprint $table) {
                // Only drop the foreign key if the column is present
                if (Schema::hasColumn('blogs', 'category_id')) {
                    $table->dropForeign(['category_id']);
                }
            });
            Schema::dropIfExists('blogs');
        }
    }
}
