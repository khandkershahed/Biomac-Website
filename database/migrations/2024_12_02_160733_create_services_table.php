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
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('thumbnail_image')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('side_image')->nullable();
            $table->text('short_description')->nullable();
            $table->string('row_one_title')->nullable();
            $table->string('row_one_image')->nullable();
            $table->longText('row_one_description')->nullable()->comment('text-editor');
            $table->string('row_one_button_name')->nullable();
            $table->text('row_one_button_link')->nullable();
            $table->longText('row_two')->nullable();
            $table->longText('row_three')->nullable();
            $table->longText('row_four')->nullable();
            $table->longText('row_five')->nullable();
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
