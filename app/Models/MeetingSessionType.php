<?php

namespace App\Models;

use App\Models\MeetingSession;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MeetingSessionType extends Model
{
    use HasFactory;

    public function meetingSessions()
    {
        return $this->hasMany(MeetingSession::class);
    }
}
