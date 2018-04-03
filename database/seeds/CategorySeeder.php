<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [
            [
                'type' => 'research_development',
                'title_en' => 'Research projects',
                'slug_en' => str_slug('Research projects'),
                'description_en' => $faker->realText(200, 2),
                'title_vi' => 'Research projects',
                'slug_vi' => str_slug('Research projects'),
                'description_vi' => $faker->realText(200, 2),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'type' => 'research_development',
                'title_en' => 'Publications',
                'slug_en' => str_slug('Publications'),
                'description_en' => $faker->realText(200, 2),
                'title_vi' => 'Publications',
                'slug_vi' => str_slug('Publications'),
                'description_vi' => $faker->realText(200, 2),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'type' => 'research_development',
                'title_en' => 'Data Science Lab',
                'slug_en' => str_slug('Data Science Lab'),
                'description_en' => $faker->realText(200, 2),
                'title_vi' => 'Data Science Lab',
                'slug_vi' => str_slug('Data Science Lab'),
                'description_vi' => $faker->realText(200, 2),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'type' => 'research_development',
                'title_en' => 'Technology transfer',
                'slug_en' => str_slug('Technology transfer'),
                'description_en' => $faker->realText(200, 2),
                'title_vi' => 'Technology transfer',
                'slug_vi' => str_slug('Technology transfer'),
                'description_vi' => $faker->realText(200, 2),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

            // product
            [
                'type' => 'product',
                'title_en' => 'Smart camera',
                'slug_en' => str_slug('Smart camera'),
                'description_en' => $faker->realText(200, 2),
                'title_vi' => 'Smart camera',
                'slug_vi' => str_slug('Smart camera'),
                'description_vi' => $faker->realText(200, 2),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'type' => 'product',
                'title_en' => 'NLP',
                'slug_en' => str_slug('NLP'),
                'description_en' => $faker->realText(200, 2),
                'title_vi' => 'NLP',
                'slug_vi' => str_slug('NLP'),
                'description_vi' => $faker->realText(200, 2),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'type' => 'product',
                'title_en' => 'Data Science Lab',
                'slug_en' => str_slug('Data Science Lab'),
                'description_en' => $faker->realText(200, 2),
                'title_vi' => 'Data Science Lab',
                'slug_vi' => str_slug('Data Science Lab'),
                'description_vi' => $faker->realText(200, 2),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

        ];

        Category::insert($data);
    }
}
