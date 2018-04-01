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
        'start_at' => '2018-04-01 08:00:00',
        'end_at' => '2018-04-01 08:00:00',
        'point_review_manual' => 3.5,
        'total_review_manual' => 20,
        'is_review_manual' => true,
        'point_review_avg' => 3.5,
        'total_review' => 20,
        'viewed' => 30,
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
        'slug_vi' => $defaultSlug,
        'description_vi' => $defaultDes,
        'detail_vi' => $defaultDes
    ];

    $dataEn = [
        'has_en' => true,
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

$factory->define(App\Models\AboutUs::class, function (Faker $faker) use ($defaultTitle, $defaultDes, $defaultSlug) {
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
        'title_vi' => $defaultTitle,
        'slug_vi' => $defaultSlug,
        'description_vi' => $defaultDes,
    ];

    $dataEn = [
        'title_en' => $defaultTitle,
        'slug_en' => $defaultSlug,
        'description_en' => $defaultDes,
    ];

    return array_merge($dataVi, $dataEn);
});

$factory->define(App\Models\Author::class, function (Faker $faker) {
    return [
        'name_vi' => 'Thuy Nguyen',
        'name_en' => 'oliverliam@aiacademy.com',
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
