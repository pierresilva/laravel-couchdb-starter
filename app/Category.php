<?php

namespace App;

use Robsonvn\CouchDB\Eloquent\Model as Model;

class Category extends Model
{
    //
    protected $fillable = [
        'name',
        'description'
    ];

    public function books()
    {
        return $this->hasMany(Book::class);
    }
}
