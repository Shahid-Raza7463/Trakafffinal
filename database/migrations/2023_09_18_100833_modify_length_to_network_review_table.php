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
        Schema::table('network_review', function (Blueprint $table) {
            $table->decimal('all_rating')->default(0)->change();
            $table->decimal('offer_rating')->default(0)->change();
            $table->decimal('payout_rating')->default(0)->change();
            $table->decimal('tracking_rating')->default(0)->change();
            $table->decimal('support_rating')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('network_review', function (Blueprint $table) {
            //
        });
    }
};
