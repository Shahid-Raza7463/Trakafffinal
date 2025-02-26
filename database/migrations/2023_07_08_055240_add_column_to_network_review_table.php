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
            //
            $table->bigInteger('parent_review_id')->default(0)->after('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('network_review', function (Blueprint $table) {
            //
            $table->dropColumn('parent_review_id');
        });
    }
};
