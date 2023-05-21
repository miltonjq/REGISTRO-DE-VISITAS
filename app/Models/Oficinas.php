<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oficinas extends Model
{
    // oficinas
    use HasFactory;

    public function sede()
    {
        return $this->belongsTo(Sedes::class);
    }
}
