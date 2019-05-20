<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = [
        'id',
        'name',
        'address',
        'Tp',
        'position',
        'joined_at'
        
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
