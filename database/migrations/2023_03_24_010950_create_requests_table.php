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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();
            $table->uuid()->unique();
            $table->unsignedBigInteger('category_id');
            $table->foreign("category_id")->references('id')->on("category");
            $table->unsignedBigInteger('quality_id');
            $table->foreign("quality_id")->references('id')->on("quality");
            $table->string("url");
            $table->string("message");
            $table->unsignedBigInteger('user_id');
            $table->foreign("user_id")->references('id')->on("user");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
