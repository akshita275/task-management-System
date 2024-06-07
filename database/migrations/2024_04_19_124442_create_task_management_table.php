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
        Schema::create('task_management', function (Blueprint $table) {
            $table->id();
            $table->foreignId('requirement_id')->references('id')->on('requirement_management')->onDelete('cascade')->onUpdate('cascade');
            $table->string('task_name');
            $table->string('task_description');
            $table->string('task_type');
            $table->string('attachment')->nullable();
            $table->string('task_assignment');
            $table->date('task_start_date');
            $table->date('task_end_date');
            $table->string('task_current_stage');
            $table->enum('task_status',['New','In Progress','Closed']);
            $table->string('teamleader_comments')->nullable();
            $table->boolean('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('task_management');
    }
};
