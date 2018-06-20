<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['kinngaku', 'user_id','namae','genre'];
    
    public function spents(){
        
        return $this->belongsTo(User::class);
    }
}
