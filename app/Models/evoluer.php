<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class evoluer extends Model
{
    use HasFactory;
    protected $fillable =[
        'dated', 'datef', 'primeTransport'
    ];
    public function filere(){
        return $this->belongTo(etudiant::class);
    }
    public function entreprise(){
        return $this->belongTo(entreprise::class);
    }
}
