<?php

namespace Database\Seeders;

use App\Models\Ticket;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ticketsData = [
            [
                'concert_id' => 1,
                'price' => 50.00,
                'quantity' => 100,
            ],
            [
                'concert_id' => 2,
                'price' => 40.00,
                'quantity' => 80,
            ],
            [
                'concert_id' => 3,
                'price' => 60.00,
                'quantity' => 120,
            ],
            [
                'concert_id' => 4,
                'price' => 45.00,
                'quantity' => 90,
            ],
            [
                'concert_id' => 5,
                'price' => 55.00,
                'quantity' => 110,
            ],
            [
                'concert_id' => 6,
                'price' => 65.00,
                'quantity' => 130,
            ],
            [
                'concert_id' => 7,
                'price' => 70.00,
                'quantity' => 140,
            ],
            [
                'concert_id' => 8,
                'price' => 48.00,
                'quantity' => 96,
            ],
            [
                'concert_id' => 9,
                'price' => 52.00,
                'quantity' => 104,
            ],
            [
                'concert_id' => 10,
                'price' => 42.00,
                'quantity' => 84,
            ],
        ];
        Ticket::insert($ticketsData);
    }
}
