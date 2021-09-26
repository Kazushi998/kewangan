<?php

namespace App\Models;

use App\Models\User;
use App\Models\Elaun;
use App\Models\Potongan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gaji extends Model
{
    use HasFactory;

    protected $fillable = [
        'tarikh',
        'user_ic',
        'elaun_id',
        'potongan_id',
        'caruman_majikan',
        'caruman_pekerja',
        'gaji_pokok',
        'gaji_bersih',
        'bank',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function elaun()
    {
        return $this->belongsTo(Elaun::class);
    }

    public function potongan()
    {
        return $this->belongsTo(Potongan::class);
    }
}
