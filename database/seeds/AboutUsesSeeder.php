<?php

use Illuminate\Database\Seeder;
use App\Models\AboutUs;

class AboutUsesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            factory(AboutUs::class)->create();
        }
    }
}
