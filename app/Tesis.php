<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tesis extends Model
{
    protected $table = 'gestiontesis';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $fillable = [
        'codigo',
        'nombre',
        'carrera',
        'siglas',
        
        
    ];
    protected $casts = [
        'created_at' => 'datetime',
    ];
    protected $guarded = [];
}