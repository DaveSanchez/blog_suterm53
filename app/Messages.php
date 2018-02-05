<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Messages extends Model
{
    //
    protected $fillable = [
        'contact',	'email',	'phone',	'body',  'seen'
    ];
}
