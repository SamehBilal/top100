<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class series extends Model
{
    protected $fillable = [
        'name', 'description', 'position', 'rate', 'numofrates', 'average'
    ];
}
