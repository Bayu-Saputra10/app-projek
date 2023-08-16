<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    function scopeBulan($query, array $bulan) {
        return $query->whereBetween('bulan', [$bulan[0], $bulan[1]]);
    }
}
