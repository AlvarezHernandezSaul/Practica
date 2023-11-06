<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HasApiToken;

class Alumnos extends Model
{
    use HasFactory, HasFactory;
    protected $fillable = [
      
        ('matri'),
        ('name'),
        ('apep'),
        ('apem'),
        ('email'),
        ('fnac'), 
        ('phone'),
        ('avatar'), 
    ];
}


  