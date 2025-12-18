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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->longtext('category_type');
            $table->longtext('long_description')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('slug');
            $table->string('seo_title')->nullable();
            $table->longtext('seo_keywords')->nullable();
            $table->longtext('seo_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
