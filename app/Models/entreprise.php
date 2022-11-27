<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class entreprise extends Model
{
    use HasFactory;
    protected $fillable =[
        'nomE', 'descrption'
    ];
    public function evoluer(){
        return $this->hasMany(evoluer::class);
    }
}
