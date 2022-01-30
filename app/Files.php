<?php

namespace App;

use Robsonvn\CouchDB\Eloquent\Model as Model;

class Files extends Model
{
    //
    protected $fillable = [
        'fileable_id',
        'fileable_type',
        'file',
        'url',
    ];
}
