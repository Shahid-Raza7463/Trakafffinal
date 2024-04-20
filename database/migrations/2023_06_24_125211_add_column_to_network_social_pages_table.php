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
        Schema::table('network_social_pages', function (Blueprint $table) {
            //
            $table->text('icon')->nullable()->after('social_link');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('network_social_pages', function (Blueprint $table) {
            //
            $table->dropColumn('icon');
        });
    }
};
