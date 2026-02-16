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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->foreignId('service_id')->nullable()->constrained()->onDelete('set null');
            $table->json('client_name'); // Multilingual
            $table->string('duration')->nullable();
            $table->string('website_url')->nullable();

            // Multilingual content
            $table->json('title'); // {en: '', ar: ''}
            $table->json('description'); // Short description
            $table->json('overview'); // Detailed overview

            // Testimonial (optional)
            $table->json('testimonial_text')->nullable();
            $table->json('testimonial_name')->nullable();
            $table->json('testimonial_role')->nullable();

            // Images
            $table->string('featured_image')->nullable();

            // Display settings
            $table->boolean('is_featured')->default(false); // Show on homepage
            $table->integer('order')->default(0);
            $table->enum('status', ['active', 'draft'])->default('active');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
