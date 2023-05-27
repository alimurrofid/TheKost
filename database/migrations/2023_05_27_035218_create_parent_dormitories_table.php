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
        Schema::create('parent_dormitories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone_number')->unique();
            $table->unsignedBigInteger('fk_id_dormitory')->nullable();
            $table->foreign("fk_id_dormitory")->references("id")->on("dormitories")->nullOnDelete();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parent_dormitories');
    }
};
