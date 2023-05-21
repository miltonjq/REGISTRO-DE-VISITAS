<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Visitas extends Model
{
    // visitas
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class,);
    }

    public function oficina()
    {
        return $this->belongsTo(Oficinas::class);
    }

    public function personero()
    {
        return $this->belongsTo(User::class);
    }
}
