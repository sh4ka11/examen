<?php

namespace App\Models;
use App\Models\user;
use App\Models\exemplaries;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loan extends Model
{
    use HasFactory;

    public function users(){
        return $this->belongsToMany('App\Models\user');
    }
    public function exemplaries(){

        return $this->belongsToMany('App\Models\exemplary');
    }
}
