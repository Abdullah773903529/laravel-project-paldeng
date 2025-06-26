<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Building extends Model
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
        'customer_id',
        'user_id'
    ];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }   //

    public function section(){
        return $this->belongsTo(Section::class);
    }   //
    public function user(){
        return $this->belongsTo(User::class);
    }   //
}
