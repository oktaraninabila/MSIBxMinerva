<?php

namespace App\Exports;

use App\Models\Peserta;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PesertaExport implements FromCollection, WithHeadingRow
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Peserta::select( 'post_id', 'nama', 'email', 'notelp', 'instansi', 'domisili')->get();
    }

    public function headings(): array
    {
        return ["Post_id", "Nama", "Email", "Notelp", "Instansi", "Domisili"];
    }
}
