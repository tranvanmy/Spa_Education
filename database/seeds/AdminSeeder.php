<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'email' => 'admin@aiacademy.vn',
            'name' => 'Admin',
            'password' => bcrypt('12345678'),
            'is_active' => true,
        ]);
    }
}
