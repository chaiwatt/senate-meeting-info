<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\MeetingSession;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MeetingSessionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $meetingDate = '09/04/2567';
        $convertedDate = Carbon::createFromFormat('d/m/Y', $meetingDate)->subYears(543)->format('Y-m-d');

        MeetingSession::create([
            'meeting_session_type_id' => 1,
            'order' => '33',
            'name' => 'สมัยสามัญประจำปีครั้งที่สอง',
            'meeting_date' => $convertedDate
        ]);
    }
}
