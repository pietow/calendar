<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('appointments')->insert([
            'description' => Str::random(10),
            'date' => Carbon::parse('2021-01-01'),
            'time' => '00:00',
            'user_id' => 1,
        ]);
    }
}
