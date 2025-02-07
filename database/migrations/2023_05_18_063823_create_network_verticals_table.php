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
        Schema::create('network_verticals', function (Blueprint $table) {
            $table->unsignedBigInteger('network_id');
            $table->integer('vertical_id');
            $table->timestamps();

            $table->foreign('network_id')->references('network_id')->on('networks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('network_verticals');
    }
};
