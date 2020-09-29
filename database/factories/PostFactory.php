<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title'    =>  $faker -> title(),
        'category' =>  $faker -> sentence(),
        'text'     =>  $faker -> text($maxNbChars = 100),
        'like'     =>  $faker -> numberBetween($min = 0, $max = 100),
        'dislike'  =>  $faker -> numberBetween($min = 0, $max = 100)
    ];
});
