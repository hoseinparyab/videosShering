<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Video::factory()->create([
            'name' => 'Best Video'
        ]);


        Video::factory()->hasComments(4)->hasLikes(10)->count(15)->create();
    }
}
