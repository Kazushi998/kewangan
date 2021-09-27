<?php

namespace App\Models;

use App\Models\Gaji;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Elaun extends Model
{
    use HasFactory;

    public $guarded = [];

    public function gaji()
    {
        return $this->hasOne(Gaji::class);
    }

    protected $table = 'elaun';
}
