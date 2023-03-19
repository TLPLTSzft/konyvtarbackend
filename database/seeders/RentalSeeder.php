<?php

namespace Database\Seeders;

use App\Models\Rental;
use Database\Factories\RentalFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RentalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Rental::factory(15)->create();
    }
}
