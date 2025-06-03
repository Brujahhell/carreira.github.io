<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model{
    protected $primaryKey = 'id';
    protected $table = 'categoria';
    public $timestamps = false;

    protected $fillable =
        array(
            "id",
            "nome",
        );

    use HasFactory;

}
