<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('gallery_images', function (Blueprint $table) {
        $table->id();
        $table->foreignId('category_id')->constrained('gallery_categories')->onDelete('cascade');
        $table->string('title')->nullable();
        $table->string('image_path');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_images');
    }
};
