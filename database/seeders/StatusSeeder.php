<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status')->insert([
            [
                'uuid' => Str::uuid(),
                'name' => 'On Process',
                'percentage' => 10,
                'color' => 'red',
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'Done',
                'percentage' => 100,
                'color' => 'blue',
            ],
        ]);
    }
}
