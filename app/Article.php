<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'title', 'description', 'body', 'photo','user_id','is_published','featured'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function sections()
    {
        return $this->belongsToMany(Section::class)->withTimestamps();
    }
    public function regions()
    {
        return $this->belongsToMany(Region::class)->withTimestamps();
    }

    public static $rules = array(
        "title"=>"required",
        "description"=>"required",
        "body"=>"required",
        "photo"=>"required|url",
        "user_id"=>"required",
        "is_published"=>"required",
       );
}
