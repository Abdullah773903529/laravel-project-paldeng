<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{

    protected $fillable = [
       'name',
        'job',
        'phone',
        'user_id'
    ];
    //
    // public function cummnt(){
    //     return $this->hasMany(Cummnt::class);
    // }   //
}
