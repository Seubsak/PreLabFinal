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
        Schema::create('term_fees', function (Blueprint $table) {
            $table->id();
            $table->integer('fees');
            $table->foreignId('std_id')->references('id')->on('students');
            $table->foreignId('dep_id')->references('id')->on('departments');
            $table->timestamps();
            $table->softDeletes('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('term_fees');
    }
};
