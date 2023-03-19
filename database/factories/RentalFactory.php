<?php

namespace Database\Factories;

use App\Models\Book;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rental>
 */
class RentalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $book_ids = Book::all()->pluck('id');
        $start_date = fake()->dateTimeBetween('-1 year');
        $seged = Carbon::createFromDate($start_date)->addDay()->toDateString();
        $end_date = fake()->dateTimeInInterval($seged, '+1 year -1 day');
        if (rand(0, 2) == 0) {
            $end_date = null;
        }

        return [
            'book_id' => fake()->randomElement($book_ids),
            'start_date' => $start_date,
            'end_date' => $end_date,
        ];
    }
}
