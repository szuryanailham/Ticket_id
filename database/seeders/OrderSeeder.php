<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ordersData = [
            [
                'user_id' => 1,
                'order_id' => 1
            ],
            [
                'user_id' => 2,
                'order_id' => 1
            ],
        ];
        Order::insert($ordersData);
    }
}
