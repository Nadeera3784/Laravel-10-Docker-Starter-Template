<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        Course::factory()->create([
            'name' => 'Transformative Teacher Collaboration',
            'slug' => Str::slug('Transformative Teacher Collaboration', '-'),
            'url' => 'https://raw.githubusercontent.com/mediaelement/mediaelement-files/master/big_buck_bunny.mp4',   
            'description' => "You want to look at data while viewing it through an equity lens and you don't know where to begin? This course will walk you through facilitating DEIJ data discussions by using CASEL's Equity Data Protocol, also referred to as the SEL Data Reflection Protocol. This tool will help establish a common framework for data conversations that is structured, while creating a safe environment that allows all participants' voices to be heard. Utilization of a data protocol is a great way to ensure participants feel safe to contribute to the conversation.",
            'thumbnail' => 'https://apostles.eduspark.world/resize?url=https%3A%2F%2Fapostles.eduspark.world%2Fstorage%2Fpng%2FWhoCod5RouM89ZXxu3ENOisWp82anZS1Nc4a5A60.png',   
       ]);

        Course::factory()->create([
            'name' => 'Looking at Data with an Equity Lens',
            'slug' => Str::slug('Looking at Data with an Equity Lens', '-'),
            'url' => 'https://raw.githubusercontent.com/mediaelement/mediaelement-files/master/big_buck_bunny.mp4',   
            'description' => "When teachers collaborate from their expertise, multilingual students learn in a more equitable and inclusive environment. If teacher collaboration is underutilized, multilingual students might not be able to access the content nor be less successful in engaging with learning experiences. With teacher collaboration, we fulfill the promise that multilingual students can learn content and develop academic English language at the same time. As a result, we drastically transform the learning experiences for multilingual students.",
            'thumbnail' => 'https://apostles.eduspark.world/resize?url=https%3A%2F%2Fapostles.eduspark.world%2Fstorage%2Fpng%2FgCykQjO21QhQfYogUXT1a0ikCVUHDJaI8Zb5s168.png',   
        ]);

        Course::factory()->create([
            'name' => '2D and Graphic Design',
            'slug' => Str::slug('2D and Graphic Design', '-'),
            'url' => 'https://raw.githubusercontent.com/mediaelement/mediaelement-files/master/big_buck_bunny.mp4',   
            'description' => "In this course you will learn about 2D and graphic designing digital tools that makes cross curricular projects fun in the classroom.",
            'thumbnail' => 'https://apostles.eduspark.world/resize?url=https%3A%2F%2Fapostles.eduspark.world%2Fstorage%2Fpng%2F0tsfXxPZ9A64OMQSTc0W9ReVIy04UrNjKtPdFHjq.png',   
        ]);

        Course::factory()->create([
            'name' => 'Robotics with Sphero',
            'slug' => Str::slug('Robotics with Sphero', '-'),
            'url' => 'https://raw.githubusercontent.com/mediaelement/mediaelement-files/master/big_buck_bunny.mp4',   
            'description' => "Learn about coding and robotics with a fun robot Sphero is a digital environment. Physical robot required for best learning experience.",
            'thumbnail' => 'https://apostles.eduspark.world/resize?url=https%3A%2F%2Fapostles.eduspark.world%2Fstorage%2Fpng%2FpZ38em7asXEdOBXjlZ0gaCpPeu6518cp1hhcFaGp.png',   
        ]);

        Course::factory()->create([
            'name' => 'Small Group Safeguarding Leads Support',
            'slug' => Str::slug('Small Group Safeguarding Leads Support', '-'),
            'url' => 'https://www.youtube.com/watch?v=b2WSwsaTnBs',   
            'description' => "Join our exclusive DSL Support Program, expertly led by Priya Mitchell, a distinguished leader in international safeguarding. This program is designed to empower Designated Safeguarding Leads with in-depth, personalized support through a meticulously structured approach. Limited to just four DSLs per cohort",
            'thumbnail' => 'https://apostles.eduspark.world/resize?url=https%3A%2F%2Fapostles.eduspark.world%2Fstorage%2Fpng%2F7oJHiheTM5ONyciHOFIBdJZE6AeUhqSDGipHYuFt.png',   
        ]);

        Course::factory()->create([
            'name' => 'Digital Art and STEM Webinar Series',
            'slug' => Str::slug('Digital Art and STEM Webinar Series', '-'),
            'url' => 'https://www.youtube.com/shorts/DArpb-3xqC8',   
            'description' => "Welcome you to explore the intersection of Art and STEM with our pre recorded webinar series, designed by teachers for teachers.",
            'thumbnail' => 'https://apostles.eduspark.world/resize?url=https%3A%2F%2Fapostles.eduspark.world%2Fstorage%2Fjpg%2FdqfpH6TvbR9ZfKXTFsBn4Q5jXPJ0qevcC3IBGRST.jpg',   
        ]);

    }
}
