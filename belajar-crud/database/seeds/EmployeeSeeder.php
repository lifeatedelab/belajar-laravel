<?php

use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'name' => 'Erza',
            'jabatan' => 'COO',
            'telephone' => '085866470729',
            'address' => 'Jl. Jalan di Sidoarjo, Jawa Timur',
        ]);

        DB::table('employees')->insert([
            'name' => 'Suroji',
            'jabatan' => 'CEO',
            'telephone' => '085866470722',
            'address' => 'Jl. Jalan di Surabaya, Jawa Timur',
        ]);
    }
}
