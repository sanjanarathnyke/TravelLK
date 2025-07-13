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
        Schema::create('attractions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('region_id')->constrained('regions')->onDelete('cascade');

            $table->string('attraction_no1');
            $table->text('description_attraction_no1');
    
            $table->string('attraction_no2')->nullable();
            $table->text('description_attraction_no2')->nullable();
    
            $table->string('attraction_no3')->nullable();
            $table->text('description_attraction_no3')->nullable();
    
            $table->string('attraction_no4')->nullable();
            $table->text('description_attraction_no4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attractions');
    }
};
