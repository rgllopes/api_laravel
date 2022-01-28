<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:: table('users')->insert([
            [
                'name'          => 'Administrator',
                'email'         => 'admin@admin.com',
                'phone'         => '+52 222 362 1514',
                'active'        => true,
                'user_role'     => 1,
                'password'      => "password",
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
            [
                'name'          => 'User',
                'email'         => 'user@user.com',
                'phone'         => '+55 51 99154 7000',
                'acive'         => true,
                'user_role'     => 0,
                'password'      => "password",
                'created_at'    => Carbon::now(),
                'updated_at'    => Carbon::now(),
            ],
        ]);
    }
}
