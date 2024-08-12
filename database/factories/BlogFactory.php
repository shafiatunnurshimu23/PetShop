<?php

namespace Database\Factories;

use App\Models\Blog;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $blog_name=$this->faker->unique()->words($nb=5,$asText=true);
        $slug = Str::slug($blog_name);
        return [
            'name'=> $blog_name,
            'slug'=> $slug ,
            'short_description'=>$this->faker->text(200),
            'description'=>$this->faker->text(1000),
            'writer'=>$this->faker->text(50),
            'image'=>'blog'.$this->faker->unique()->numberBetween(1,5),
            



        ];
    }
}
