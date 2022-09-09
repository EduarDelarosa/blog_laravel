<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{

    protected $model = Post::class;


    public function definition()
    {
        return [
            'user_id' => 1,
            'title' => $this->faker->sentence,
            'slug' => $this->faker->text(),
            'body' => $this->faker->text(800),
        ];
    }
}
