<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use DB;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sampel = [
            ['title' => 'Assalaam Juara', 'content' => 'Assalaam Studio'],
            ['title' => 'Assalaam Berkurban', 'content' => 'Assalaam Studio'],
            ['title' => 'Assalaam Bershalawat', 'content' => 'Assalaam Studio'],
        ];

        DB::table('posts')->insert($sampel);
        //
    }
}
