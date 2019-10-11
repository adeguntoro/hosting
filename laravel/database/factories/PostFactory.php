<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        'author'    => $faker->name,
        'judul'     => $faker->name,
        'tldr'      => $faker->text,
        'isi'       => $faker->text,
        'slug'      => Str::slug($faker->name, '-').'-'.Str::random(5)
    ];
});


