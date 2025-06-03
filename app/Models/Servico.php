<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model{

    protected $primaryKey = 'categoria_id';
    protected $table = 'servico';
    public $timestamps = false;

    protected $fillable =
        array(
            'id',
            'categoria_id',
            'nome'
        );

    use HasFactory;
}
