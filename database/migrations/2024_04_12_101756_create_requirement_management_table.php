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
        Schema::create('requirement_management', function (Blueprint $table) {
            $table->id('requirement_id');
            $table->string('requirement_name');
            $table->string('requirement_description');
            $table->string('client_name');
            $table->foreignId('position_id')->references('position_id')->on('position_masters');
            $table->enum('requirement_status',['New','InProgress','Closed']);
            $table->enum('requirement_priority',['Low','Medium','High']);
            $table->text('attachment')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requirement_management');
    }
};
