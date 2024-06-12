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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('prefix')->nullable()->comment('เมนู prefix');
            $table->string('code')->nullable()->comment('โค้ด');
            $table->string('name')->nullable()->comment('ชื่อโมดูล(เมนูหลัก)');
            $table->string('icon')->nullable()->comment('ไอคอน');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
