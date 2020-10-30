<?php

namespace Database\Factories;

use App\Models\Concert;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class ConcertFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Concert::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => 'Example Band',
            'subtitle' => 'with Animosity and Lethargy',
            'date' => Carbon::parse('+2 weeks'),
            'ticket_price' => 200,
            'venue' => 'Example Theatre',
            'venue_address' => '123 Example',
            'city' => 'Fakeville',
            'state' => 'ON',
            'zip' => '62960',
            'additional_information' => 'Sample additional information'
        ];
    }
}
