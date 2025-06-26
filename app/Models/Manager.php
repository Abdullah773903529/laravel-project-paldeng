<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    //
    protected $fillable = [
        'name',
         'job',
         'img'
        
     ];
    
    public function section(){
        return $this->hasOne(Section::class);
    }   //
}
