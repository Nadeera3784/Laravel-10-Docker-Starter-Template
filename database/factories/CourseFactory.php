<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class CourseFactory extends Factory
{

    public function definition(): array
    {
        $name = fake()->name();
        return [
            'name' => $name,
            'slug' => Str::slug($name, '-'),
            'description' => fake()->realText(200),
            'url' => 'https://raw.githubusercontent.com/mediaelement/mediaelement-files/master/big_buck_bunny.mp4',
            'thumbnail' => 'https://apostles.eduspark.world/resize?url=https%3A%2F%2Fapostles.eduspark.world%2Fstorage%2Fpng%2FgCykQjO21QhQfYogUXT1a0ikCVUHDJaI8Zb5s168.png'
        ];
    }
}
