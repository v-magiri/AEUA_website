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
        Schema::create('tbl_leaders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_id')->nullable();
            // Define foreign key constraint
            $table->foreign('member_id')->references('id')->on('tbl_members')->onDelete('cascade');
            $table->string('title')->default("");
            $table->string('name')->default("");
            $table->year('year_appointed')->default(2000);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_leaders');
    }
};
