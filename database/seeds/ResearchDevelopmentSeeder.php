<?php

use Illuminate\Database\Seeder;
use App\Models\ResearchDevelopment;

class ResearchDevelopmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 5; $i++) {
            factory(ResearchDevelopment::class)->create([
                'category_id' => $i % 4,
            ]);
        }
    }
}
