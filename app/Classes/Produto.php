<?php


namespace App\Classes;


use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    public $fillable = [
        'user_id',
        'nome',
        'cod',
        'preco',
        'usuario',
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
