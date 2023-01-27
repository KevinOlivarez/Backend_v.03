<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MixComercial extends Model
{
    use HasFactory;
    protected $table = 'mix_Comercial';
    protected $primaryKey = 'id_mix_comercial';
    protected $fillable = ['nombre_mix','descripcion_mix','mix_padre'];
    public $timestamps = false;
}
