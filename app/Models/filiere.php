<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class filiere extends Model
{
    use HasFactory;
    protected $fillable =[
        'nomF'
    ];
    public function etudiant(){
        return $this->hasMany(etudiant::class);
    }
}
