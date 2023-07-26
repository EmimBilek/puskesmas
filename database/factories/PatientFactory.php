<?php

namespace Database\Factories;

use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    private static $nomorUrut = 1;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $nomor_urut = self::$nomorUrut;

        // Inkrement nilai nomor urut untuk penggunaan selanjutnya
        self::$nomorUrut++;

        return [
            'name' => fake()->name(),
            'gender' => fake()->randomElement(['M', 'F']),
            'birth_date' => $this->generateRandomDate(),
            'poly_id' => mt_rand(1,2),
            'queue_number' => $nomor_urut
        ];

    }

    protected function generateRandomDate()
    {
        $startDate = new DateTime('1950-01-01');
        $endDate = new DateTime(); // Gunakan waktu sekarang
        $randomTimestamp = mt_rand($startDate->getTimestamp(), $endDate->getTimestamp());
        $randomDate = new DateTime();
        $randomDate->setTimestamp($randomTimestamp);
        return $randomDate->format('Y-m-d');
    }
}
