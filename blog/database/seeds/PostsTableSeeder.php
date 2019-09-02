<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('App\Posts');
        foreach (range(1,100) as $index) {
        DB::table('posts')->insert([
            'title' => $faker->sentence,
            'content' => implode($faker->paragraphs(5)),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now(),
        ]);

        }
    }
}
