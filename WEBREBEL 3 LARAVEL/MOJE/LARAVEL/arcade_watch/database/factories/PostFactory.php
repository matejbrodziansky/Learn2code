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
        $title = $this->faker->words(4, true);

        return [
            'user_id' =>1,
            'title' =>ucfirst($title),
            'text' =>$this->faker->paragraph(5, true),
            'slug' =>str_slug($title),
        ];
    }
}

// return [
//     'name' => $this->faker->name(),
//     'email' => $this->faker->unique()->safeEmail(),
//     'email_verified_at' => now(),
//     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//     'remember_token' => Str::random(10),
// ];