<?php

namespace Database\Factories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Schedule>
 */
class ScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $subjectId = 101;
        return [
            'subject_id' => $subjectId++,
            'hari'=>$this->faker->randomELement(['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat']),
            'jam_mulai'=>$this->faker->randomELement(['07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00']),
            'jam_selesai'=>$this->faker->randomELement(['07:00', '08:00', '09:00', '10:00', '11:00', '12:00', '13:00', '14:00']),
            'ruangan'=>$this->faker->randomELement(['A1', 'A2', 'A3', 'A4', 'A5', 'A6']),
            'kode_absensi'=>$this->faker->randomELement(['A1', 'A2', 'A3', 'A4', 'A5', 'A6']),
            'tahun_akademik'=>$this->faker->randomELement(['2021/2022', '2022/2023', '2023/2024']),
            'semester'=>$this->faker->randomELement(['Ganjil', 'Genap']),
            'created_by'=>$this->faker->numberBetween(1,3),
            'updated_by'=>$this->faker->numberBetween(1,3),
            'deleted_by' => NULL, 
        ];
    }
}