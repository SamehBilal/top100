<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    protected $fillable = [
        'name', 'description', 'position', 'rate', 'numofrates', 'average', 'image_path'
    ];
}
