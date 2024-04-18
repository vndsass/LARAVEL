<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Socio extends Model
{
    use HasFactory;

    protected $fillable=[
        'user_id',
        'nome',
        'cc',
        'morada',
        'cod_postal',
        'localidade',
        'email',
        'telefone',        
    ];
    
    public function user(){
        return $this->belongsTo(User::class);

}
}
