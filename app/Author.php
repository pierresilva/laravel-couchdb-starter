<?php

namespace App;

use Robsonvn\CouchDB\Eloquent\Model as Model;

class Author extends Model
{
    //
    protected $fillable = [
        'name',
        'birth_date',
        'bio'
    ];

    public function files()
    {
        return $this->morphToMany(Files::class, 'fileable');
    }

    public function books()
    {
        return $this->belongsToMany(Author::class);
    }
}
