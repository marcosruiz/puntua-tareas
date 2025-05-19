<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\QuestionGroup;

class QuestionGroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        QuestionGroup::factory()->create([
            'title' => 'Mi primer grupo de preguntas',
            'description' => 'Descripción',
        ]);
    }
}
