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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->text('preview_image');
            $table->tinyInteger('status')->default(0);
            $table->tinyInteger('sponsored')->default(0);
            $table->tinyInteger('featured')->default(0);
            $table->string('category');
            $table->unsignedBigInteger('network_id')->default(0);
            $table->string('add_user')->default(0);
            $table->string('update_user')->default(0);
            $table->text('meta_title');
            $table->text('meta_description');
            $table->text('tags');
            $table->string('slug')->unique();
            $table->timestamps();

            $table->foreign('network_id')->references('network_id')->on('networks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
