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
        Schema::create('offers', function (Blueprint $table) {
            $table->id();
            $table->text('icon')->nullable();
            $table->string('title');
            $table->integer('offer_id');
            $table->unsignedBigInteger('network_id')->default(1);
            $table->decimal('payout');
            $table->string('countries')->nullable();
            $table->tinyInteger('status');
            $table->text('offer_image');
            $table->tinyInteger('is_featured')->default(0);
            $table->timestamps();

            $table->foreign('network_id')->references('network_id')->on('networks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offers');
    }
};
