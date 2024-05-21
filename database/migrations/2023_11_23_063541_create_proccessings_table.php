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
        Schema::create('proccessings', function (Blueprint $table) {
            $table->id();
            $table->string('job_name');
            $table->integer('procedure_id');
            $table->integer('action_id');
            $table->integer('dept_id');
            $table->dateTime('started_at');
            $table->dateTime('finished_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proccessings');
    }
};
