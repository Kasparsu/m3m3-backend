<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{

    public $fillable = [
        'name'
    ];

    public function memes(){
        return $this->belongsToMany(Meme::class);
    }
}
