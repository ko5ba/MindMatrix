<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('image_news', function (Blueprint $table) {
            $table->id();
            $table->foreignId('image_id')->index()->constrained('images')->cascadeOnDelete();
            $table->foreignId('news_id')->index()->constrained('news')->cascadeOnDelete();
            $table->timestamps();
            $table->unique(['image_id', 'news_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('image_news');
    }
};
