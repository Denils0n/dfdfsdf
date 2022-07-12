<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class PokemonTipo extends Pivot
{

    use HasFactory;
    protected $fillable = [
        'iv',
        'pokemon_id',
        'tipo_id',
        
       
    ];

    public $incrementing = true;

    public function pokemon()
    {
        return $this->belongsTo(Pokemon::class);
    }
    public function tipo()
    {
        return $this->belongsTo(Tipo::class);
    }
    
}
