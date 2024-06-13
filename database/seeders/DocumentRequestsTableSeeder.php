<?php

namespace Database\Seeders;

use App\Models\DocumentRequest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DocumentRequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DocumentRequest::create([
            'name' => 'ตัวอย่างคำขอ'
        ]);
    }
}
