<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Question;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        Question::factory()->create([
            'title' => 'Mi primera pregunta',
            'description' => '¿Qué relación Eloquent se utiliza para representar que un post puede tener muchos comentarios?',
        ]);
    }
}
