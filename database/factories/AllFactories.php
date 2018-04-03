<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$defaultDes = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim';
$defaultTitle = 'Natural Language Processing';
$defaultSlug = str_slug($defaultTitle);

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Course::class, function (Faker $faker) use ($defaultTitle, $defaultDes, $defaultSlug){
    $dataVi = [
        'has_vi' => true,
        'title_vi' => $a = $faker->realText(50, 1),
        'slug_vi' => str_slug($a),
        'description_vi' => $faker->realText(200),
        'detail_vi' => $faker->realText(500)
    ];

    $dataEn = [
        'has_en' => true,
        'title_en' => $a = $faker->realText(50, 1),
        'slug_en' => str_slug($a),
        'description_en' => $faker->realText(200),
        'detail_en' => $faker->realText(500)
    ];

    $commonData = [
        'point_review_manual' => 3.5,
        'total_review_manual' => 20,
        'is_review_manual' => true,
        'point_review_avg' => 3.5,
        'total_review' => 20,
        'viewed' => 30,
    ];

    return array_merge($dataVi, $dataEn, $commonData);
});

$factory->define(App\Models\Product::class, function (Faker $faker) use ($defaultTitle, $defaultDes, $defaultSlug){
    $dataVi = [
        'has_vi' => true,
        'title_vi' => $defaultTitle,
        'slug_vi' => $defaultSlug,
        'description_vi' => $defaultDes,
        'detail_vi' => $defaultDes
    ];

    $dataEn = [
        'has_en' => true,
        'title_en' => $defaultTitle,
        'slug_en' => $defaultSlug,
        'description_en' => $defaultDes,
        'detail_en' => $defaultDes
    ];

    $commonData = [
        'point_review_manual' => 3.5,
        'total_review_manual' => 20,
        'is_review_manual' => true,
        'point_review_avg' => 3.5,
        'total_review' => 20,
        'viewed' => 30,
    ];

    return array_merge($dataVi, $dataEn, $commonData);
});

$factory->define(App\Models\Event::class, function (Faker $faker) use ($defaultTitle, $defaultDes, $defaultSlug){
    $dataVi = [
        'has_vi' => true,
        'title_vi' =>  $a = $faker->realText(50),
        'slug_vi' => str_slug($a),
        'description_vi' => $faker->realText(200, 2),
        'detail_vi' => $faker->realText(500, 2),
        'address_vi' => $faker->streetAddress,
    ];

    $dataEn = [
        'has_en' => true,
        'title_en' =>  $a = $faker->realText(50),
        'slug_en' => str_slug($a),
        'description_en' => $faker->realText(200, 2),
        'detail_en' => $faker->realText(500, 2),
        'address_en' => $faker->streetAddress,
    ];

    $commonData = [
        'start_at' => '2018-04-01 08:00:00',
        'end_at' => '2018-04-01 16:00:00',
        'point_review_manual' => 3.5,
        'total_review_manual' => 20,
        'is_review_manual' => true,
        'point_review_avg' => 3.5,
        'total_review' => 20,
        'viewed' => 30,
        'image_url' => $faker->imageUrl(370, 275),
    ];

    return array_merge($dataVi, $dataEn, $commonData);
});

$factory->define(App\Models\ResearchDevelopment::class, function (Faker $faker) use ($defaultTitle, $defaultDes, $defaultSlug){
    $dataVi = [
        'has_vi' => true,
        'title_vi' => $defaultTitle,
        'slug_vi' => $defaultSlug,
        'description_vi' => $defaultDes,
        'detail_vi' => $defaultDes
    ];

    $dataEn = [
        'has_en' => true,
        'title_en' => $defaultTitle,
        'slug_en' => $defaultSlug,
        'description_en' => $defaultDes,
        'detail_en' => $defaultDes
    ];

    $commonData = [
        'point_review_manual' => 3.5,
        'total_review_manual' => 20,
        'is_review_manual' => true,
        'point_review_avg' => 3.5,
        'total_review' => 20,
        'viewed' => 30,
        'image_url' => $faker->imageUrl(370, 275, 'cats'),
    ];

    return array_merge($dataVi, $dataEn, $commonData);
});

$factory->define(App\Models\DataScientist::class, function (Faker $faker) use ($defaultTitle, $defaultDes, $defaultSlug){
    $dataVi = [
        'has_vi' => true,
        'title_vi' => $defaultTitle,
        'slug_vi' => $defaultSlug,
        'description_vi' => $defaultDes,
        'detail_vi' => $defaultDes
    ];

    $dataEn = [
        'has_en' => true,
        'title_en' => $defaultTitle,
        'slug_en' => $defaultSlug,
        'description_en' => $defaultDes,
        'detail_en' => $defaultDes
    ];

    $commonData = [
        'point_review_manual' => 3.5,
        'total_review_manual' => 20,
        'is_review_manual' => true,
        'point_review_avg' => 3.5,
        'total_review' => 20,
        'viewed' => 30,
    ];

    return array_merge($dataVi, $dataEn, $commonData);
});

$factory->define(App\Models\Instructor::class, function (Faker $faker) use ($defaultTitle, $defaultDes, $defaultSlug){
    $dataVi = [
        'has_vi' => true,
        'name_vi' => $a = $faker->name(),
        'slug_vi' => str_slug($a),
        'description_vi' => $defaultDes,
        'detail_vi' => $defaultDes,
        'specialized_vi' => $faker->name(),
    ];

    $dataEn = [
        'has_en' => true,
        'name_en' => $a = $faker->name(),
        'slug_en' => str_slug($a),
        'description_en' => $defaultDes,
        'detail_en' => $defaultDes,
        'specialized_en' => $faker->name(),
    ];

    $commonData = [
        'point_review_manual' => 3.5,
        'total_review_manual' => 20,
        'is_review_manual' => true,
        'point_review_avg' => 3.5,
        'total_review' => 20,
        'viewed' => 30,
        'image_url' => $faker->imageUrl(370, 275, 'cats'),
    ];

    return array_merge($dataVi, $dataEn, $commonData);
});

$factory->define(App\Models\AboutUs::class, function (Faker $faker) use ($defaultTitle, $defaultDes, $defaultSlug) {
    $dataVi = [
        'has_vi' => true,
        'title_vi' => $a = $faker->realText(50, 1),
        'slug_vi' => str_slug($a),
        'description_vi' => $faker->realText(200),
        'detail_vi' => $faker->realText(500)
    ];

    $dataEn = [
        'has_en' => true,
        'title_en' => $a = $faker->realText(50, 1),
        'slug_en' => str_slug($a),
        'description_en' => $faker->realText(200),
        'detail_en' => $faker->realText(500)
    ];

    $commonData = [
        'point_review_manual' => 3.5,
        'total_review_manual' => 20,
        'is_review_manual' => true,
        'point_review_avg' => 3.5,
        'total_review' => 20,
        'viewed' => 30,
    ];

    return array_merge($dataVi, $dataEn, $commonData);
});

$factory->define(App\Models\JoinUs::class, function (Faker $faker) use ($defaultTitle, $defaultDes, $defaultSlug){
    $dataVi = [
        'has_vi' => true,
        'slug_vi' => $defaultSlug,
        'description_vi' => $defaultDes,
        'detail_vi' => $defaultDes
    ];

    $dataEn = [
        'has_vi' => true,
        'slug_vi' => $defaultSlug,
        'description_vi' => $defaultDes,
        'detail_vi' => $defaultDes
    ];

    $commonData = [
        'point_review_manual' => 3.5,
        'total_review_manual' => 20,
        'is_review_manual' => true,
        'point_review_avg' => 3.5,
        'total_review' => 20,
        'viewed' => 30,
    ];

    return array_merge($dataVi, $dataEn, $commonData);
});

$factory->define(App\Models\Category::class, function (Faker $faker) use ($defaultTitle, $defaultDes, $defaultSlug) {
    $dataVi = [
        'description_vi' => $faker->realText(200, 2),
    ];

    $dataEn = [
        'description_en' => $faker->realText(200, 2),
    ];

    return array_merge($dataVi, $dataEn);
});

$factory->define(App\Models\Author::class, function (Faker $faker) {
    return [
        'name_vi' => $faker->name(),
        'name_en' => $faker->name(),
        'image_url' => $faker->imageUrl(320, 320),
    ];
});

$factory->define(App\Models\Comment::class, function (Faker $faker) {
    return [
        'name' => 'Thuy Nguyen',
        'email' => 'oliverliam@aiacademy.com',
        'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ];
});

$factory->define(App\Models\Subcriber::class, function (Faker $faker) {
    return [
        'name' => 'Oliver Liam',
    ];
});
