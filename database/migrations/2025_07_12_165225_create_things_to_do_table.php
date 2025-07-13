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
        Schema::create('things_to_do', function (Blueprint $table) {
            $table->id();
            $table->foreignId('region_id')->constrained('regions')->onDelete('cascade');

            $table->string('activity_1');
            $table->text('description_activity_1');
    
            $table->string('activity_2')->nullable();
            $table->text('description_activity_2')->nullable();
    
            $table->string('activity_3')->nullable();
            $table->text('description_activity_3')->nullable();
    
            $table->string('activity_4')->nullable();
            $table->text('description_activity_4')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('things_to_do');
    }
};
