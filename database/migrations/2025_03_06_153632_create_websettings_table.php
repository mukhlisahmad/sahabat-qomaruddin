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
        Schema::create('websettings', function (Blueprint $table) {
            $table->id();
            $table->string('favicon')->nullable()->default(null);
            $table->string('title')->nullable()->default(null);
            $table->string('webname')->nullable()->default(null);
            $table->string('logo')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->string('nomor')->nullable()->default(null);
            $table->string('alamat')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('websettings');
    }
};
