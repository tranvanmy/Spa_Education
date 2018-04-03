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
        $faker = Faker\Factory::create();
        $data = [
            [
                'title_en' => 'Vision / Mission',
                'slug_en' => str_slug('Vision / Mission'),
                'description_en' => $faker->realText(200, 2),
                'title_vi' => 'Vision / Mission',
                'slug_vi' => str_slug('Vision / Mission'),
                'description_vi' => $faker->realText(200, 2),
                'detail_vi' => $faker->realText(500, 2),
                'detail_en' => $faker->realText(500, 2),
                'point_review_manual' => 3.5,
                'total_review_manual' => 20,
                'is_review_manual' => true,
                'point_review_avg' => 3.5,
                'total_review' => 20,
                'viewed' => 30,
                'has_vi' => true,
                'has_en' => true,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'title_en' => 'Scientific Advisory Board',
                'slug_en' => str_slug('Scientific Advisory Board'),
                'description_en' => $faker->realText(200, 2),
                'title_vi' => 'Scientific Advisory Board',
                'slug_vi' => str_slug('Scientific Advisory Board'),
                'description_vi' => $faker->realText(200, 2),
                'detail_vi' => $faker->realText(500, 2),
                'detail_en' => $faker->realText(500, 2),
                'point_review_manual' => 3.5,
                'total_review_manual' => 20,
                'is_review_manual' => true,
                'point_review_avg' => 3.5,
                'total_review' => 20,
                'viewed' => 30,
                'has_vi' => true,
                'has_en' => true,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'title_en' => 'Researchers & Data scientists',
                'slug_en' => str_slug('Researchers & Data scientists'),
                'description_en' => $faker->realText(200, 2),
                'title_vi' => 'Researchers & Data scientists',
                'slug_vi' => str_slug('Researchers & Data scientists'),
                'description_vi' => $faker->realText(200, 2),
                'detail_vi' => $faker->realText(500, 2),
                'detail_en' => $faker->realText(500, 2),
                'point_review_manual' => 3.5,
                'total_review_manual' => 20,
                'is_review_manual' => true,
                'point_review_avg' => 3.5,
                'total_review' => 20,
                'viewed' => 30,
                'has_vi' => true,
                'has_en' => true,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'title_en' => 'Student & PhD. candidates ',
                'slug_en' => str_slug('Student & PhD. candidates '),
                'description_en' => $faker->realText(200, 2),
                'title_vi' => 'Student & PhD. candidates ',
                'slug_vi' => str_slug('Student & PhD. candidates '),
                'description_vi' => $faker->realText(200, 2),
                'detail_vi' => $faker->realText(500, 2),
                'detail_en' => $faker->realText(500, 2),
                'point_review_manual' => 3.5,
                'total_review_manual' => 20,
                'is_review_manual' => true,
                'point_review_avg' => 3.5,
                'total_review' => 20,
                'viewed' => 30,
                'has_vi' => true,
                'has_en' => true,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

            // product
            [
                'title_en' => 'Our philosophy and approaches',
                'slug_en' => str_slug('Our philosophy and approaches'),
                'description_en' => $faker->realText(200, 2),
                'title_vi' => 'Our philosophy and approaches',
                'slug_vi' => str_slug('Our philosophy and approaches'),
                'description_vi' => $faker->realText(200, 2),
                'detail_vi' => $faker->realText(500, 2),
                'detail_en' => $faker->realText(500, 2),
                'point_review_manual' => 3.5,
                'total_review_manual' => 20,
                'is_review_manual' => true,
                'point_review_avg' => 3.5,
                'total_review' => 20,
                'viewed' => 30,
                'has_vi' => true,
                'has_en' => true,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
        ];

        AboutUs::insert($data);
    }
}
