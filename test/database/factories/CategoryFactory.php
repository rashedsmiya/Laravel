<?php

namespace Database\Factories;

use App\Model\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Category::class;
    public function definition(): array
    {
        return [
            'name' => $this->fake->name(),
            'slug' => $this->fake->slug(),
            'image' => $this->fake->imageUrl(),
            'status' => $this->fake->numberBetween(0, 1),
        ];
    }

}
 