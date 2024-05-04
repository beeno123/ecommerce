<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use App\Models\Slider;
use App\Models\WhyChooseUs;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(WhyChooseUsTitleSeeder::class);
        Product::factory(10)->create();
        Slider::factory(10)->create();
        WhyChooseUs::factory(3)->create();
        $this->call(UserSeeder::class);
    }
}
