<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpenditureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:: table('expenditures')->insert([
            [
                'description'   => 'Fuel',
                'value'         => 123.45,
                'datePay'       => date('Y-m-d'),
                'id_user'       => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'description'   => 'Entertainment',
                'value'         => 321.56,
                'datePay'       => date('Y-m-d'),
                'id_user'       => 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'description'   => 'Food',
                'value'         => 56.78,
                'datePay'       => date('Y-m-d'),
                'id_user'       => 2,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
            [
                'description'   => 'Internet',
                'value'         => 89.67,
                'datePay'       => date('Y-m-d'),
                'id_user'       => 2,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ],
        ]);
    }
}
