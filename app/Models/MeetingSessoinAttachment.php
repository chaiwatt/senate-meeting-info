<?php

namespace App\Models;

use App\Models\MeetingSession;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MeetingSessoinAttachment extends Model
{
    use HasFactory;

    public function meetingSession()
    {
        return $this->belongsTo(MeetingSession::class);
    }
}
