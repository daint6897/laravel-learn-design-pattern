<?php

namespace Database\Factories;

use App\Models\Post;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->word,
            'body' => $this->faker->text(),
            'views' => $this->faker->numberBetween(1000, 9999),
            'user_id' => \App\Models\User::factory()->create()->id, // make User and assign the id
            'category_id' => \App\Models\Category::factory()->create()->id, // make Category and assign the id
        ];
    }
}
