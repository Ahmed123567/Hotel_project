<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Floor extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',   
        'updated_at',
        'created_at'
    ];


    public function user(){

        return $this->belongsTo(User::class, 'user_id');
    }

}
