<?php

use Illuminate\Database\Seeder;
use App\Models\JoinUs;

class JoinUsSeeder extends Seeder
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
                'has_vi' => true,
                'title_vi' => $a = 'Deliver courses with us',
                'slug_vi' => str_slug($a),
                'description_vi' => $faker->realText(200, 2),
                'detail_vi' => $faker->realText(500, 2),
                'has_en' => true,
                'title_en' => $a = 'Deliver courses with us',
                'slug_en' => str_slug($a),
                'description_en' => $faker->realText(200, 2),
                'detail_en' => $faker->realText(500, 2),
                'point_review_manual' => 3.5,
                'total_review_manual' => 20,
                'is_review_manual' => true,
                'point_review_avg' => 3.5,
                'total_review' => 20,
                'viewed' => 30,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'has_vi' => true,
                'title_vi' => $a = 'Become our data scientist',
                'slug_vi' => str_slug($a),
                'description_vi' => $faker->realText(200, 2),
                'detail_vi' => $faker->realText(500, 2),
                'has_en' => true,
                'title_en' => $a = 'Become our data scientist',
                'slug_en' => str_slug($a),
                'description_en' => $faker->realText(200, 2),
                'detail_en' => $faker->realText(500, 2),
                'point_review_manual' => 3.5,
                'total_review_manual' => 20,
                'is_review_manual' => true,
                'point_review_avg' => 3.5,
                'total_review' => 20,
                'viewed' => 30,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'has_vi' => true,
                'title_vi' => $a = 'Become our industry advisor',
                'slug_vi' => str_slug($a),
                'description_vi' => $faker->realText(200, 2),
                'detail_vi' => $faker->realText(500, 2),
                'has_en' => true,
                'title_en' => $a = 'Become our industry advisor',
                'slug_en' => str_slug($a),
                'description_en' => $faker->realText(200, 2),
                'detail_en' => $faker->realText(500, 2),
                'point_review_manual' => 3.5,
                'total_review_manual' => 20,
                'is_review_manual' => true,
                'point_review_avg' => 3.5,
                'total_review' => 20,
                'viewed' => 30,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],
            [
                'has_vi' => true,
                'title_vi' => $a = 'Join our partner network',
                'slug_vi' => str_slug($a),
                'description_vi' => $faker->realText(200, 2),
                'detail_vi' => $faker->realText(500, 2),
                'has_en' => true,
                'title_en' => $a = 'Join our partner network',
                'slug_en' => str_slug($a),
                'description_en' => $faker->realText(200, 2),
                'detail_en' => $faker->realText(500, 2),
                'point_review_manual' => 3.5,
                'total_review_manual' => 20,
                'is_review_manual' => true,
                'point_review_avg' => 3.5,
                'total_review' => 20,
                'viewed' => 30,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ],

        ];

        JoinUs::insert($data);
    }
}
