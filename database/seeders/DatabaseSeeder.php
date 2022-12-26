<?php

namespace Database\Seeders;
use App\Models\Mahasiwa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
            $this->call([
            KelasSeeder::class,
            UpdateMahasiswaSeeder::class,
            MataKuliahSeeder::class,

        ]);
        
        Mahasiwa::create([
            'nim' => '204170069',
            'nama' => 'Farah Zulfa',
            'kelas_id' => 5,
            'jurusan' => 'Teknologi Informasi',
            'foto' => 'default.png'
            
        ]);
        $this->call([

            NilaiSeeder::class,
        ]);

       

    }
}
