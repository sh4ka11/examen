<?php

namespace App\Models;
use App\Models\exemplaries;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    
public function exemplaries(){
    return $this->hasMany('App\Models\exemplary');
}
}


