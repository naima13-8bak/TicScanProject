<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motif extends Model
{
    use HasFactory;
    protected $fillable = ['nom','description'];
    
    public function image(){
        return $this->hasMany('App\Image');
      }
}
