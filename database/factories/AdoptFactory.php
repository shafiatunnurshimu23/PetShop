<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Adopt;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Adopt>
 */
class AdoptFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $adopt_name=$this->faker->unique()->words($nb=4,$asText=true);
        $slug =Str::slug($adopt_name);
        return [
            'name'=>$adopt_name,
            'slug'=>$slug,
            'code'=>$this->faker->text(50),
            'age'=>$this->faker->text(50),
            'Gender'=>$this->faker->text(50),
            'color'=>$this->faker->text(50),
            'short_description'=>$this->faker->text(100),
            'description'=>$this->faker->text(700),
            'SKU'=>$this->faker->text(50),
            'image'=>'cat'.$this->faker->unique()->numberBetween(1,14),
            
            
 


        ];
    }
}
