<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class son extends Model
{
    use HasFactory;
    //relacion 1 a muchos
    public function associate(){
        return $this->belongsTo(associate::class);
    }
}
