<?php

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            factory(App\Models\Comment::class)->create([
                'owner_id' => $i % 4,
                'owner_type' => 'author',
            ]);
        }
    }
}
