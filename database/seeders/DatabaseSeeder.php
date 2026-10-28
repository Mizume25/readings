<?php

namespace Database\Seeders;

use App\Models\Reading;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    const READINGS_DEFAULT = [
        ['title' => 'Rojo y Negro',        'author' => 'Stendhal',          'like' => true, 'comment' => 'Una novela muy interesante'],
        ['title' => 'Cyrano de Bergerac',  'author' => 'Edmond Rostand',    'like' => true, 'comment' => 'Tengo Tatuado su frase final ajjakfasjfkaj'],
        ['title' => 'Los Miserables',      'author' => 'Victor Hugo',       'like' => true, 'comment' => 'LLore' ],
        ['title' => 'Zibaldone',           'author' => 'Giacomo Leopardi',  'like' => false, 'comment' => 'Muy edgy para mi gusto' ],
        ['title' => 'Musashino',           'author' => 'Kunikida Doppo',    'like' => false , 'comment' => 'UNa lectura demasiada tranquila'],
        ['title' => 'Eureka',              'author' => 'Edgar Allan Poe',   'like' => false, 'comment' => 'Lo leei hace mucho tiempo, no me acuerdo de nada'], 
    ];

    public function run(): void
    {
        foreach (self::READINGS_DEFAULT as $reading) {
            Reading::create($reading);
        }
    }
}
