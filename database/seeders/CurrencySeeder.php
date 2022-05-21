<?php

namespace Database\Seeders;

use App\Models\Common\Currency;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Currency::truncate();

        Currency::create([
            'name' => "Bangladeshi Taka",
            'iso_code' => "BDT",
            'symbol' => "৳",
        ]);

        Currency::create([
            "iso_code" => "USD",
            "name" => "United States Dollar",
            "symbol" => "$",
        ]);

        Currency::create([
            "iso_code" => "NPR",
            "name" => "Nepalese Rupee",
            "symbol" => "₨",
        ]);

        Currency::create([
            "iso_code" => "INR",
            "name" => "Indian Rupee",
            "symbol" => "₨",
        ]);
    }
}
