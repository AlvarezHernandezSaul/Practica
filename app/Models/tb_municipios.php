<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb_municipios extends Model
{
    use HasFactory;

    // protected $table = 'tb_municipios';

    // protected $fillable = [
    //     'cp',
    //     'nombre',
    //     'id_estado'
    // ];

    // public function estado()
    // {
    //     return $this->belongsTo(tb_municipios::class, 'id_estado');
    // }
    protected $table = 'tb_municipios';
    protected $primaryKey = 'id_municipio';
    protected $fillable = [

        'cp',
        'nombre',
        'id_estado'
    ];
}
