<?php

namespace Database\Seeders;

use App\Models\Common\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        Schema::disableForeignKeyConstraints();
        $this->call(UserTableSeeder::class);
        $this->call(CountrySeeder::class);
        $this->call(StateSeeder::class);
        $this->call(CitySeeder::class);
        $this->call(ThanaSeeder::class);
        Schema::disableForeignKeyConstraints();
        $this->call(CurrencySeeder::class);
    }
}