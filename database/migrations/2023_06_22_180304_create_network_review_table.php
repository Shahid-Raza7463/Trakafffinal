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
        Schema::create('network_review', function (Blueprint $table) {
            $table->id('review_id');
            $table->bigInteger('network_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->tinyInteger('all_rating')->default(0);
            $table->tinyInteger('offer_rating')->default(0);
            $table->tinyInteger('payout_rating')->default(0);
            $table->tinyInteger('tracking_rating')->default(0);
            $table->tinyInteger('support_rating')->default(0);
            $table->text('review_text');
            $table->text('review_img');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();

            $table->foreign('network_id')->references('network_id')->on('networks')->onDelete('cascade');

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('network_review');
    }
};
