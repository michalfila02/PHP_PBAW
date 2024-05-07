<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class wypozyczalnia extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'wypozyczalnia'; 

    protected $primaryKey = 'Nr_wypozyczenia'; 

    protected $fillable = [
        'Nr_wypozyczenia',
        'Imie',
        'Nazwisko',
        'PESEL',
        'Data_wypożyczenia',
        'Data_oddania',
        'Samochody_Nr_rejestracyjny',
    ];

    public $incrementing = true;
    public function samochod()
    {
        return $this->belongsTo(Samochod::class, 'Samochody_Nr_rejestracyjny', 'Nr_rejestracyjny');
    }
}
