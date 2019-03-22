<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Meme extends Model
{
    public $fillable = [
        'title'
        ];

    public function image(){
        return $this->hasOne(Image::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class);
    }
    public function tags(){
        return  $this->belongsToMany(Tag::class);
    }
    public function category(){
        return  $this->hasOne(Category::class);
    }
    public function user(){
        return  $this->belongsTo(User::class, 'author_id');
    }
    public function originalPoster(){
        return $this->belongsTo(User::class, 'op_id');
    }
}
