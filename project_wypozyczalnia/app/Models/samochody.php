<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class samochody extends Model
{
    use HasFactory;
    protected $table = 'samochody';
    public $timestamps = false;
    protected $primaryKey = 'Nr_rejestracyjny';

    protected $fillable = [
        'Nr_rejestracyjny',
        'Marka',
        'Model',
        'Koszt_wynajecia_na_dzien',
        'Przebieg_w_km',
        'Wypozyczalnie_Nazwa',
    ];

    public $incrementing = false;


    public function wypozyczalnia()
    {
        return $this->belongsTo(Wypozyczalnie::class, 'Wypozyczalnie_Nazwa', 'Nazwa');
    }
}
