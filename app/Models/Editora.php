<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
    use HasFactory;
    protected $fillable=[
        'nome',        
        'morada',      
        'telefone',
        'contribuinte',        
    ];

    public function editora(){
        return $this->hasMany(Editora::class);
    }

 
   

    
    
}


