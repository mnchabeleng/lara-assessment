<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;
use App\Models\Customer;
use App\Models\SalePerson;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $vat = (float)14;
        $quantity = rand(1, 10);
        $discount = (float)rand(0, 25);
        $randomProductId = rand(1, 16);

        $product = Product::find($randomProductId);
        $subtotal = ((float)$product->price) * $quantity;

        return [
            'status' => 'complete',
            'vat' => $vat,
            'quantity' => $quantity,
            'total' => $subtotal - ($subtotal * ($vat / 100)) - ($subtotal * ($discount / 100)),
            'subtotal' => $subtotal,
            'discount' => $discount,
            'product_id' => $product->id,
            'customer_id' => rand(1, count(Customer::all())),
            'sale_person_id' => rand(1, count(SalePerson::all()))
        ];
    }
}
