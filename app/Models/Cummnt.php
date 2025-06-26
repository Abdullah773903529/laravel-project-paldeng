<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cummnt extends Model
{
    // //
    protected $fillable = [
        'describtion',
        'customer_id',
        'img',
    ];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }   //
}
