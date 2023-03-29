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
                'name' => 'In Queue',
                'percentage' => 0,
                'color' => '#ff6f00',
                'slug' => 'in-queue',
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'Accepted',
                'percentage' => 10,
                'color' => '#cd5e77',
                'slug' => 'accepted',
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'On Process',
                'percentage' => 50,
                'color' => '#753ff3',
                'slug' => 'on-process',
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'Waiting for Upload',
                'percentage' => 80,
                'color' => '#0dc588',
                'slug' => 'waiting-for-upload',
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'Done Uploaded',
                'percentage' => 100,
                'color' => '#0099ff',
                'slug' => 'done-uploaded',
            ],
            [
                'uuid' => Str::uuid(),
                'name' => 'Rejected',
                'percentage' => 100,
                'color' => '#e43131',
                'slug' => 'rejected',
            ],
        ]);
    }
}
