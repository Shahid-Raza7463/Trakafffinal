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
            $table->tinyInteger('offer_ratings')->after('rating');
            $table->tinyInteger('payout_ratings')->after('rating');
            $table->tinyInteger('tracking_ratings')->after('rating');
            $table->tinyInteger('support_ratings')->after('rating');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('networks', function (Blueprint $table) {
            $table->dropColumn('offer_ratings');
            $table->dropColumn('payout_ratings');
            $table->dropColumn('tracking_ratings');
            $table->dropColumn('support_ratings');
        });
    }
};
