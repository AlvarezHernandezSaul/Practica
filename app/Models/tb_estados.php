<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_estados extends Model
{
    use HasFactory;
    // protected $table = 'tb_estados';

    // protected $fillable = [
    //     'nombre'
    // ];

    // public function municipios()
    // {
    //     return $this->hasMany(Municipio::class, 'id_estado');
    // }
    protected $table = 'tb_estados';
    protected $primaryKey = 'id_estado';
    protected $fillable = ['nombre'];
}
