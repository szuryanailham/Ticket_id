<?php

namespace Database\Seeders;

use App\Models\Country;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $CountryData = [
            [
                "country_name" => "Indonesia",
                "code_country" => "IN"
            ],
            [
                "country_name" => "Malaysia",
                "code_country" => "MY",
            ],
            [
                "country_name" => "Singapore",
                "code_country" => "SG",
            ],
            [
                "country_name" => "Tailand",
                "code_country" => "TL",
            ],
        ];
        Country::insert($CountryData);

    }
}
