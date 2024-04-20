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
        Schema::create('adspaces', function (Blueprint $table) {
            $table->id();
            $table->string('position');
            $table->text('image_url');
            $table->text('link');
            $table->tinyInteger('status')->default(0);
            $table->unsignedBigInteger('network_id')->default(1);
            $table->date('expired_at');
            $table->integer('add_user')->default(0);
            $table->integer('mod_user')->default(0);
            $table->timestamps();

            $table->foreign('network_id')->references('network_id')->on('networks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adspaces');
    }
};
