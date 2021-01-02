<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

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

$factory->define(Article::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'slug' => $faker->slug,
        'description' => $faker->text(),
//        'image' => $faker->image(\Illuminate\Support\Facades\DB::table('articles')->insert(
//            [
//                'image'=>(['2.jpg','6.jpg'])
//
//            ]
//
//        )),
        'image' => $faker->image(),
        'status' => $faker->numberBetween(0,1),
        'user_id' => factory(App\User::class),
        'hit' => $faker->numberBetween(0,300),
    ];

});
