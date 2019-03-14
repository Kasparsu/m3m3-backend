<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public $fillable = [
        'content'
    ];

    public function meme(){
        return  $this->belongsTo(Meme::class);
    }
    public function author() {
        return $this->belongsTo(User::class);
    }
}
