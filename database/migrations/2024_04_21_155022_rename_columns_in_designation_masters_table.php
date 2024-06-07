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
        Schema::table('designation_masters', function (Blueprint $table) {
            $table->renameColumn('designation_id','id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('designation_masters', function (Blueprint $table) {
            $table->renameColumn('id','designation_id');
        });
    }
};
