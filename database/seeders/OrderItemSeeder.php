<?php

namespace Database\Seeders;

use App\Models\Order_item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $orderItemsData = [
            [
                'order_id' => "KD-001",
                'ticket_id' => 1,
                'user_id' => 1,
                'quantity' => 3,
                'status' => 'Unpaid',
                'subtotal' => 150.00,
            ],
            [
                'order_id' => "KD-002",
                'ticket_id' => 4,
                'user_id' => 1,
                'quantity' => 2,
                'status' => 'Unpaid',
                'subtotal' => 90.00,
            ]
        ];
        Order_item::insert($orderItemsData);
    }
}
