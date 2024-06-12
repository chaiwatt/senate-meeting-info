<?php

namespace App\Models;

use App\Models\MeetingSessionType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MeetingSession extends Model
{
    use HasFactory;
    protected $fillable = [
        'meeting_session_type_id',
        'order',
        'name',
        'meeting_date',
        'meeting_notice',
        'meeting_record',
        'meeting_vote_record',
        'meeting_report',
        'meeting_event',
    ];

    public function meetingSessionType()
    {
        return $this->belongsTo(MeetingSessionType::class);
    }

}
