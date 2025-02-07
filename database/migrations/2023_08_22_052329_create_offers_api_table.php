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
        Schema::create('offers_api', function (Blueprint $table) {
            $table->id();
            $table->text('api_url');
            $table->unsignedBigInteger('network_id')->default(0);
            $table->tinyInteger('status')->default(0);
            $table->string('tracking_software');
            $table->string('frequency');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers_api');
    }
};
