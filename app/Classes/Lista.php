<?php


namespace App\Classes;


use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    public $fillable = [
        'product_id',
        'user_id',
    ];

    public function produtos(){
        return $this->belongsToMany(Produto::class);
    }

    public function users(){
        return $this->belongsTo(User::class);
    }
}
