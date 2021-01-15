<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    protected $table = 'projeto';
    protected $primaryKey = 'idprojeto';

    public $timestamps = false;

    protected $fillable = ['nome', 'inicio', 'termino', 'valor', 'risco', 'participantes'];
    protected $table = "projeto";
}
