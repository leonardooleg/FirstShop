<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Textile extends Model
{
    protected $fillable = ['textiles_category', 'textiles_cloths', 'textiles_sex', 'textiles_type', 'textiles_size', 'textiles_color', 'textiles_qty', 'textiles_desc', 'created_by', 'modified_by'];
    //protected $guarded = array('id');
}
