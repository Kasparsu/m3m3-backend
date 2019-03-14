<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public $fillable = [
        'path', 'source', 'hash'
    ];


    public function meme(){
        return  $this->belongsTo(Meme::class);
    }
}
