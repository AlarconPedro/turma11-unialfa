<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    protected $fillable = ['titulo'];
    use HasFactory;

    // Uma serie tem muitas temporadas

    public function temporadas()
    {
        return $this->hasMany(Temporada::class);
    }
}