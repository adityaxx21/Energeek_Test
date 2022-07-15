<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'id' => 10001,
            'name' => 'PHP',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('skills')->insert([
            'id' => 10002,
            'name' => 'PostgreSQL',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('skills')->insert([
            'id' => 10003,
            'name' => 'API (JSON,REST)',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('skills')->insert([
            'id' => 10004,
            'name' => 'Version Control System (Gitlab, Github)',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('jobs')->insert([
            'id' => 10001,
            'name' => 'Front Web Developer',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('jobs')->insert([
            'id' => 10002,
            'name' => 'Fullstack Web Programmer',
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        DB::table('jobs')->insert([
            'id' => 10003,
            'name' => 'Quality Controll',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
    }
}
