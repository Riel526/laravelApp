<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number' => $this->faker->numberBetween(10, 1000),
            'customerId' => $this->faker->numberBetween(1, 20),
            'date' => $this->faker->date,
            'dueDate' => $this->faker->date,
            'reference' => 'REF-'.rand(10, 500),
            'termsAndConditions' => $this->faker->paragraph(2),
            'subTotal' => $this->faker->numberBetween(100, 1000),
            'discount' => $this->faker->numberBetween(10, 100),
            'total' => $this->faker->numberBetween(20, 2000)
        ];
    }
}