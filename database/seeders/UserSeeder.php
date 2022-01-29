<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    public function run()
    {
        DB:: table('users')->insert([
            [
                'name'          => 'Administrator',
                'email'         => 'admin@admin.com',
                'phone'         => '+52 222 362 1514',
                'active'        => true,
                'password'      => bcrypt("password"),
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'name'          => 'User',
                'email'         => 'user@user.com',
                'phone'         => '+55 51 99154 7000',
                'acive'         => true,
                'password'      => bcrypt("password"),
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
        ]);
    }
}
