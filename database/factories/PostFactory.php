<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
   /**
     * The name of the factory's corresponding model
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * define the model's default state
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(rand(4,10), true),
            'content' => $this->faker->sentences(15, true),
            'image' => "https://via.placeholder.com/1000",
        ];
    }
}
