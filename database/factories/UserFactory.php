<?php
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/** @var TYPE_NAME $factory */

$factory->define(App\User::class, function (Faker $faker) {
 return [
        'frist_name'=>$faker->name,
        'last_name' =>$faker->lastName,
        'email' => $faker->email,
        'password' =>\Illuminate\Support\Facades\Hash::make('pass'),
        'city'=> $faker->city,
        'status'=>rand(0,1)
        ];
 });
