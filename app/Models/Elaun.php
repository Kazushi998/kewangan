<?php

namespace App\Models;

use App\Models\Gaji;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Elaun extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_elaun1',
        'jumlah_elaun1',
        'nama_elaun2',
        'jumlah_elaun2',
        'nama_elaun3',
        'jumlah_elaun3',
    ];

    public function gaji()
    {
        return $this->hasOne(Gaji::class);
    }
}
