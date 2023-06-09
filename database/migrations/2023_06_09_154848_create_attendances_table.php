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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('teacher_id');
            $table->foreign('teacher_id')->references('id')->on('users');
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')->references('id')->on('users');
            $table->string('month');
            $table->string('year');
            $table->string('month_year');
            $table->smallInteger('total_days');
            $table->smallInteger('total_present');
            $table->text('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
