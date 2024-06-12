<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleUsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userOne = User::find(1);
        $roleOne = Role::find(1);
        $userOne->roles()->attach($roleOne);

        $userTwo = User::find(2);
        $roleTwo = Role::find(2);
        $userTwo->roles()->attach($roleTwo);

        // $userThree = User::find(3);
        // $roleTwo = Role::find(2);
        // $userThree->roles()->attach($roleTwo);
       
    }
}
