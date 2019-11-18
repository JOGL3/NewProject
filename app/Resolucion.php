<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resolucion extends Model
{
    protected $table = 'resolucion';
    protected $primaryKey = 're_id';
    public $timestamps = false;
    protected $fillable = [
        'codigo',
        'estudiante',
        'presidente',
        'secretario',
        'vocal',
        'lugar',
        'hora',
        'fecha',
        
    ];
    protected $casts = [
        'created_at' => 'datetime',
    ];
    protected $guarded = [];
}