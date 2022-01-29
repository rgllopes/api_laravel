<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{

    public function run()
    {
        DB:: table('roles')->insert([
            [
                'name'          => 'Administrator',
                'description'   => 'Adminstrator system',
            ],
            [
                'name'          => 'Create user',
                'description'   => 'Can create a new user',
            ],
            [
                'name'          => 'Update user',
                'description'   => 'Can update the user information',
            ],
            [
                'name'          => 'Create expenditures',
                'description'   => 'Can create a new expenditures',
            ],
            [
                'name'          => 'Update expenditures',
                'description'   => 'Can update the expenditures information',
            ],
            [
                'name'          => 'Delete expenditures',
                'description'   => 'Can delete the expenditures',
            ],
        ]);
    }
}
