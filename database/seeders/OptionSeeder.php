<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Option;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Option::factory()->create([
            'question_id' => 1,
            'description' => 'Primera opción'
        ]);

        Option::factory()->create([
            'question_id' => 1,
            'description' => 'Segunda opción'
        ]);

        Option::factory()->create([
            'question_id' => 1,
            'description' => 'Tercera opción'
        ]);

        Option::factory()->create([
            'question_id' => 1,
            'description' => 'Cuarta opción'
        ]);
    }
}
