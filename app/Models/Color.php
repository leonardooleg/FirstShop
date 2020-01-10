<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $guarded = [];
    protected $fillable = ['id_color', 'color', 'color_code', 'color_desc'];

}
