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
        Schema::create('candidates', function (Blueprint $table) {
            $table->id('candidate_id');
            $table->string('name');
            $table->string('email');
            $table->text('address');
            $table->string('city');
            $table->string('district');
            $table->string('state');
            $table->foreignId('qualification_id')->references('qualification_id')->on('qualification_masters')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('industry_id')->references('industry_id')->on('industry_masters')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('department_id')->references('department_id')->on('departments')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('function_id')->references('function_id')->on('function_masters')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('experience');
            $table->integer('current_salary');
            $table->string('notice_period');
            $table->text('Resume')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidates');
    }
};
