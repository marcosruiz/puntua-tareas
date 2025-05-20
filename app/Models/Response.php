<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Response extends Model
{
    //
    use HasFactory;

    protected $guarded = [];

    public function response(){
        return $this->belongsTo(Option::class);
    }
}
