<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function responses(){
        return $this->hasMany(Response::class);
    }

    public function options(){
        return $this->hasMany(Option::class);
    }

    public function questionGroup(){
        return $this->belongsTo(QuestionGroup::class);
    }

}
