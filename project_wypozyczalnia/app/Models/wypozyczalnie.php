<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wypozyczalnie extends Model
{
    use HasFactory;
    protected $table = 'wypozyczalnie'; 
    public $timestamps = false;
    protected $primaryKey = 'Nazwa'; 

    protected $fillable = [
        'Nazwa',
        'Miasto',
        'Ulica',
        'Nr_ulicy',
        'Telefon_kontaktowy',
    ];

    public $incrementing = false; 
}
