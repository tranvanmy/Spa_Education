<?php

use Illuminate\Database\Seeder;
use App\Models\DataScientist;

class DataScientistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 15; $i++) {
            factory(DataScientist::class)->create([
                'author_id' => $i%4,
                'category_id' => $i%3,
            ]);
        }
    }
}
