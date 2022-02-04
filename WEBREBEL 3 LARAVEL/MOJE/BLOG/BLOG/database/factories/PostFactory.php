<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


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
        $title = $this->faker->words(4, true);

        return [
            'user_id' =>1,
            'title' =>ucfirst($title),
            'text' =>$this->faker->paragraph(5, true),
            // 'slug' => $this->faker->slug(3),
            'slug' =>str::slug($title),
        ];
    }
}
