<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    
    protected $fillable=[
        
        'name','company', 'email', 'address', 'phone', 'group_id' 
        
    ];
    
    public function group(){
    
    return $this->belongsTo('App\Group');
        
    }
}
