<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
     protected $fillable = [
        'name', 'company'
    ];
}

public function Company(){
    return $this->belongsTo('App\Models\Company');
}