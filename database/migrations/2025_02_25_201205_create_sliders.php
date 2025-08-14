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
        Schema::create('sliders', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('button_text')->nullable();
            $table->string('button_link')->nullable();
            $table->string('image');
            $table->string('image_alt')->nullable();
            $table->timestamps();
        });
        // Insert default slider
        DB::table('sliders')->insert([
            'title' => 'Antai <span class="color-secondary">Fintech Global</span> <br> Empowers Education Worldwide',
            'description' => 'Flexible pathways, global partnerships, and career-driven education for ambitious learners worldwide.',
            'button_text' => 'Find courses',
            'button_link' => '#exclusive-programs',
            'image' => 'girl-1.webp',
            'image_alt' => 'Antai Fintech',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }

      
      

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sliders');
    }
};
