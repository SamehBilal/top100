<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class music extends Model
{
    public $table = "music";
    protected $fillable = [
        'name', 'description', 'position', 'rate', 'numofrates', 'average', 'image_path'
    ];
}
