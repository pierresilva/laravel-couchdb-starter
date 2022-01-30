<?php

namespace App;

use Robsonvn\CouchDB\Eloquent\Model as Model;

class Book extends Model
{
    //
    protected $fillable = [
        'title',
        'resume',
        'category_id',
        'published_at',
        'cover'
    ];

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
