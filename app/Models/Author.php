<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    // The attributes that are mass assignable.
    protected $fillable = [
        'lastname', 'firstname', 'birthday', 'genres',
    ];

    public function books() {
        return $this->belongsToMany('App\Models\Book');
    }
}