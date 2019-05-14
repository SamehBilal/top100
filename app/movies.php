<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class movies extends Model
{
    protected $fillable = [
        'name', 'description', 'position', 'rate', 'numofrates', 'average', 'image_path'
    ];
}
