<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InvoiceItem>
 */
class InvoiceItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'invoiceId' => $this->faker->numberBetween(100, 1000),
            'productId' => $this->faker->numberBetween(10, 100),
            'unitPrice' => $this->faker->numberBetween(100, 5000),
            'quantity' => $this->faker->numberBetween(1, 5),
        ];
    }
}
