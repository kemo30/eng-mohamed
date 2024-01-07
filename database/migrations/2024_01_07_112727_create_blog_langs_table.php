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
        Schema::create('blog_langs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('parent_id')->constrained('blogs','id')->cascadeOnDelete();
            $table->string('language');
            $table->string('image');
            $table->string('cover_image');
            $table->text('content');
            $table->string('title',255);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog_langs');
    }
};
