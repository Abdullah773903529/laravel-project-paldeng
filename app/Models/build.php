<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class build extends Model
{
    //
    protected $fillable = [
        'title',
        'stryt',
        'ceaty',
        'cuntrey',
        'sqft',
        'room',
        'bath',
        'price',
        'stats',
        'img',
        'section_id',
        'user_id'
    ];



    public function user(){
        return $this->belongsTo(User::class);
    }   //

    public function section(){
        return $this->belongsTo(Section::class);
    }   //
}
