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
        Schema::create('entreprenuership_strategies', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('member_id')->nullable();
            // Define foreign key constraint
            $table->foreign('member_id')->references('id')->on('tbl_members')->onDelete('cascade');
            $table->longText('strategy');
            $table->integer('entre_proportion')->default(0);// entreprenuership proportion
            $table->integer('support_frameworks')->default(0); // support infrastructures
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('entreprenuership_strategies');
    }
};
