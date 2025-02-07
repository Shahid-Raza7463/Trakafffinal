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
        Schema::create('networks', function (Blueprint $table) {
            $table->id('network_id');
            $table->string('network_name')->index();
            $table->tinyInteger('network_type')->default(0)->index();
            $table->text('network_url');
            $table->text('network_description');
            $table->integer('offer_count')->default(0);
            $table->decimal('min_payout')->default(0.0);
            $table->decimal('referral_commission')->default(0);
            $table->string('affiliate_tracking_software')->nullable()->index();
            $table->text('other_optional_questions')->nullable();
            $table->text('logo')->nullable();
            $table->bigInteger('user_id')->index()->unsigned();
            $table->integer('review_count')->default(0);
            $table->decimal('rating')->default(0);
            $table->text('tracking_link')->nullable();
            $table->tinyInteger('is_sponsored')->default(0)->index();
            $table->tinyInteger('status')->default(0);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('networks');
    }
};
