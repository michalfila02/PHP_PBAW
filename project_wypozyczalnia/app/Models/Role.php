<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'role'; 

    protected $primaryKey = 'Role'; 

    protected $fillable = [
        'Role',
        'Wypozyczalnie_Nazwa',
    ];

    public $incrementing = false; 
    public function wypozyczalnia()
    {
        return $this->belongsTo(Wypozyczalnia::class, 'Wypozyczalnie_Nazwa', 'Nazwa');
    }
}
