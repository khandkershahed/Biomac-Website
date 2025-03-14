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
        Schema::create('research_papers', function (Blueprint $table) {
            $table->id();
            $table->text('name')->nullable(); //
            $table->text('slug')->nullable(); //
            $table->date('date')->nullable(); //
            $table->string('author')->nullable(); //
            $table->string('impact_factor')->nullable(); //
            $table->text('journal_name')->nullable(); //
            $table->integer('citation')->nullable(); //
            $table->text('doi')->nullable(); //
            $table->text('link')->nullable(); //
            $table->string('status')->nullable(); //
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('research_papers');
    }
};
