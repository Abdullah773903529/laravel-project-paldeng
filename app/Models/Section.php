<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    //
    protected $fillable = [
        'title',
        'img',
        'manager_id'
    ];


    public function manager(){
        return $this->belongsTo(Manager::class);
    }   //
    public function builds(){
        return $this->hasMany(build::class);
    }   //
    
}
