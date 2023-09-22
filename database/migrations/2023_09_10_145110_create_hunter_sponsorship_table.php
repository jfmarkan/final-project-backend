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
        Schema::create('hunter_sponsorship', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sponsorship_id');
            $table->foreign('sponsorship_id')->references('id')->on('sponsorships');
            $table->unsignedBigInteger('hunter_id');
            $table->foreign('hunter_id')->references('id')->on('hunters');
            $table->timestamp('sponsorship_start');
            $table->dateTime('sponsorship_end');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hunter_sponsorship');
    }
};
