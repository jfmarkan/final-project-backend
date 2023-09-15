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
        Schema::create('sponsorship_hunter', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sponsorship_id');
            $table->foreign('sponsorship_id')->references('id')->on('sponsorships');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('hunters');
            $table->timestamp('sponsorship_start');
            $table->dateTime('sponsorship_end');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sponsorship_hunter');
    }
};
