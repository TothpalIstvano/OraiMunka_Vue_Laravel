<?php

namespace Database\Seeders;

use App\Models\Kategoria;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $kategoriak = ['Lakás', 'Ház', 'Épitési telek', 'Garázs', 'Mezőgazdasági terület', 'Ipari ingatlan'];
        foreach ($kategoriak as $key => $value) {
            Kategoria::create([
                'nev' => $value,
            ]);
        }

    }
}
