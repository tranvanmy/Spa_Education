<?php

use Illuminate\Database\Seeder;
use App\Models\Subcriber;

class SubcriberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            factory(Subcriber::class)->create([
                'email' => "oliverliam{$i}@aiacademy.com",
            ]);
        }
    }
}
