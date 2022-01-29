<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesAssignedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:: table('roles_assigned')->insert([
            [
                'user_id'   => '1',
                'role_id'   => '1',
            ],
        ]);
    }
}
