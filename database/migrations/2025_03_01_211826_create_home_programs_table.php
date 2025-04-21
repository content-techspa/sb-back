<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('home_programs', function (Blueprint $table) {
            $table->id();
            $table->string('thumbnail')->nullable(); // e.g. "coding-multiverse.webp"
            $table->string('name');
            $table->text('description')->nullable();
            $table->decimal('rating', 3, 1)->default(0.0);
            $table->unsignedInteger('totalReviews')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_programs');
    }
};
