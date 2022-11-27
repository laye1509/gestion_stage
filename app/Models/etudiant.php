<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class etudiant extends Model
{
    use HasFactory;
    protected $fillable =[
        'nom', 'prenom', 'naiss', 'sexe', 'lieu'
    ];
    public function filere(){
        return $this->belongTo(filiere::class);
    }
}
