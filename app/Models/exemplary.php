<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\models\books;
use App\Models\loans;
use Illuminate\Database\Eloquent\Model;

class exemplary extends Model
{
    use HasFactory;
    public function books(){
        return $this->hasmany('App\Models\book');
    }
   /* public function loans(){
        return $this->belongsToMany('App\Models\loan');
    }
        */
}
