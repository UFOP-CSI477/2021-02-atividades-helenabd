<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entidade extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'bairro', 'cidade', 'estado'];

    public function coletas()
    {
        return $this->hasMany(Coleta::class);
    }
}
