<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class QualitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('qualities')->insert([
            [
                'uuid' => Str::uuid(),
                'name' => '1080p 60FPS',
            ],
            [
                'uuid' => Str::uuid(),
                'name' => '4K 60FPS',
            ]
        ]);
    }
}
