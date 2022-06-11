<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;

    protected $fillable = ['equipamento_id', 'users_id', 'datalimite', 'descricao', 'tipo'];

    public function equipamento()
    {
        return $this->belongsTo(Equipamento::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
