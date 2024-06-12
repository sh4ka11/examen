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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');

            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('exemplary_id')->nullable();

            $table->foreign('exemplary_id')
            ->references('id')
            ->on('exemplaries')->onDelete('cascade');

            $table->foreign('user_id')
            ->references('id')
            ->on('users')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
