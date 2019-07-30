<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    public function articles()
    {
        return $this->belongsToMany(Article::class)->withTimestamps();
    }

    public static $rules = array(
        "name"=>"required",
        "description"=>"required"
    );
}
