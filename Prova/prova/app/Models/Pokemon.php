<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokemon extends Model
{
    use HasFactory;
    protected $fillable = [

        'nome',
        'ataque1',
        'ataque2',
        'ataque3',
        'ataque4',
        'user_id'
       
    ];

    public function tipo() {
        return $this->hasMany(Tipo::class);
    }

    public function equipe() {
        return $this
            ->belongsToMany(Tipo::class, 'pokemon_tipo', 'pokemon_id', 'tipo_id')
            ->withTimestamps()
            ->withPivot('id', 'iv');
        
        
    }
    public function treinador() {
        return $this->belongsTo(User::class, 'user_id');
    }
}


