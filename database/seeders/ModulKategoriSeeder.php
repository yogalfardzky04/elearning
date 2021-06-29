<?php

namespace Database\Seeders;

use App\Models\ModulKategori;
use Illuminate\Database\Seeder;

class ModulKategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModulKategori::updateOrCreate ([
        'nama' => 'Matematika',
        ]);

        ModulKategori::updateOrCreate ([
        'nama' => 'Sejarah',
        ]);

        ModulKategori::updateOrCreate ([
        'nama' => 'Ilmu Teknologi Informasi',
        ]);

        ModulKategori::updateOrCreate ([
        'nama' => 'Agama',
        ]);

        ModulKategori::updateOrCreate ([
        'nama' => 'Seni Budaya',
        ]);
    }
}
