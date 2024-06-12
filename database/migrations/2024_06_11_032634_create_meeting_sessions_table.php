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
        Schema::create('meeting_sessions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('meeting_session_type_id');
            $table->string('order')->nullable()->comment('ครั้งที่');
            $table->string('name')->nullable()->comment('สมัยประชุม');
            $table->date('meeting_date')->nullable()->comment('วันที่');
            $table->string('meeting_notice')->nullable()->comment('สมัยประชุม');
            $table->string('meeting_record')->nullable()->comment('บันทึกการประชุม');
            $table->string('meeting_vote_record')->nullable()->comment('บันทึกการลงคะแนน');
            $table->string('meeting_report')->nullable()->comment('สรุปการประชุม');
            $table->string('meeting_event')->nullable()->comment('บันทึกเหตุการณ์');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meeting_sessions');
    }
};
