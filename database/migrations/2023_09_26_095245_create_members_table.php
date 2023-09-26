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
        Schema::create('tbl_members', function (Blueprint $table) {
            $table->id();
            $table->year('year_founded');
            $table->string('university_name')->unique();
            $table->integer('number_of_schools');
            $table->integer('number_of_students');
            $table->integer('number_of_lecturers');
            $table->string('country')->default("");
            $table->string('city')->default("");
            $table->string('website')->default("")->unique();
            $table->string('address')->default("");
            $table->string('createdBy')->default("");
            $table->string('university_email')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_members');
    }
};
