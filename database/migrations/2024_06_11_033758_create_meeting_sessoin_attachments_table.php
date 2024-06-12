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
        Schema::create('meeting_sessoin_attachments', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable()->comment('ชื่อไฟล์');
            $table->unsignedBigInteger('meeting_session_id');
            $table->foreign('meeting_session_id')->references('id')->on('meeting_sessions')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meeting_sessoin_attachments');
    }
};
