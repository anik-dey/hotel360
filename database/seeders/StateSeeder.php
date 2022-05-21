<?php

namespace Database\Seeders;

use App\Models\Common\State;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::truncate();

        $states = [
            [
              "country_id" => "18",
              "name" => "Chattagram",
              "bn_name" => "চট্টগ্রাম",
              "url" => "www.chittagongdiv.gov.bd"
            ],
            [
              "country_id" => "18",
              "name" => "Rajshahi",
              "bn_name" => "রাজশাহী",
              "url" => "www.rajshahidiv.gov.bd"
            ],
            [
              "country_id" => "18",
              "name" => "Khulna",
              "bn_name" => "খুলনা",
              "url" => "www.khulnadiv.gov.bd"
            ],
            [
              "country_id" => "18",
              "name" => "Barisal",
              "bn_name" => "বরিশাল",
              "url" => "www.barisaldiv.gov.bd"
            ],
            [
              "country_id" => "18",
              "name" => "Sylhet",
              "bn_name" => "সিলেট",
              "url" => "www.sylhetdiv.gov.bd"
            ],
            [
              "country_id" => "18",
              "name" => "Dhaka",
              "bn_name" => "ঢাকা",
              "url" => "www.dhakadiv.gov.bd"
            ],
            [
              "country_id" => "18",
              "name" => "Rangpur",
              "bn_name" => "রংপুর",
              "url" => "www.rangpurdiv.gov.bd"
            ],
            [
              "country_id" => "18",
              "name" => "Mymensingh",
              "bn_name" => "ময়মনসিংহ",
              "url" => "www.mymensinghdiv.gov.bd"
            ]
          ];

        foreach ($states as $key => $value) {
            State::create($value);
        }
    }
}
