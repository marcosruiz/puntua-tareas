<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Option extends Model
{
    //
    use HasFactory;

    protected $guarded = [];

    public function question(){
        return $this->belongsTo(Question::class);
    }

    public function responses(){
        return $this->hasMany(Response::class);
    }
}
