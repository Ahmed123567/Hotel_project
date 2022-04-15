<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'floor_id',
        'capacity',
        'price',
        'updated_at'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
      
    ];


    public function getCapacityAttribute($data)
    {

        if ($data == 2) {
            return $data = 'Two Persons';
        } elseif ($data == 3) {
            return $data = 'Three Persons';
        }elseif ($data == 5){
            return $data = 'Five Persons';
        }
        ;
    }

    // public function getFloorIdAttribute($data)
    // {

    //     if ($data == 1) {
    //         return $data = 'First Floor';
    //     } elseif ($data == 2) {
    //         return $data = 'Second Floor';
    //     }elseif ($data == 3){
    //         return $data = 'Third Floor';
    //     }
    //     ;
    // }


    public function user(){

        return $this->belongsTo(User::class, 'user_id');
    }

    public function floor(){
        
        return $this->belongsTo(Floor::class , 'floor_id');
    }


}
