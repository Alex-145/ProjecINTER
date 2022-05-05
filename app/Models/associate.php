<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class associate extends Model
{
    use HasFactory;

    //relacion uno a muchos
    public function sons(){
        return $this->hasMany(son::class);
    }
    //relacion uno a muchos inversa
    public function user(){
        return $this->belongsTo(User::class);
    }
    //RELACION UNO A UNO
    public function spouse(){
        return $this->hasOne(spouse::class);
    }
}
