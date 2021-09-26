<?php

namespace App\Models;

use App\Models\Gaji;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Potongan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_potongan1',
        'jumlah_potongan1',
        'nama_potongan2',
        'jumlah_potongan2',
        'nama_potongan3',
        'jumlah_potongan3',
    ];

    public function gaji()
    {
        return $this->hasOne(Gaji::class);
    }
}
