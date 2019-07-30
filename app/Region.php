<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = [
        'name', 'description'
    ];

    public function articles()
    {
        return $this->belongsToMany(Article::class)->withTimestamps();
    }

    public static $rules = array(
        "name"=>"required|unique:regions,name",
        "description"=>"required"
    );
}
