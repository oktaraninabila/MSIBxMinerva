<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pesertas')->insert([
            'nama'      => 'Agus Bayu Pamungkas',
            'email'     => 'abay@students.unnes.ac.id',
            'notelp'    => '085159000805',
            'instansi'  => 'Universitas Negeri Semarang',
            'domisili'  => 'Purbalingga'
        ]);
    }
}