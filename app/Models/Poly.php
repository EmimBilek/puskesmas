<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Poly extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function patient(){
        return $this->hasMany(Patient::class);
    }
    public function doctor(){
        return $this->hasMany(Doctor::class);
    }
}
