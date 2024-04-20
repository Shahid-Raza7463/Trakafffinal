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
        Schema::table('networks', function (Blueprint $table) {
            $table->decimal('support_ratings')->default(0)->change();
            $table->decimal('tracking_ratings')->default(0)->change();
            $table->decimal('payout_ratings')->default(0)->change();
            $table->decimal('offer_ratings')->default(0)->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('networks', function (Blueprint $table) {
            //
        });
    }
};
