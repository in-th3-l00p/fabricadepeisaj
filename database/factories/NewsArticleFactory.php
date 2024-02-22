<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NewsArticleFactory extends Factory {
    public function definition(): array
    {
        return [
            "title" => $this->faker->sentence(6),
            "content" => $this->faker->paragraph(3),
            "created_at" => $this->faker->dateTimeBetween("-1 year", "now")
        ];
    }
}
