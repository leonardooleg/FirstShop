<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Kalnoy\Nestedset\NodeTrait;

/**
 * @method static lastCategories(int $int)
 */
class Category extends Model
{
    use NodeTrait;
    // Mass assigned
   // protected $fillable = ['title', 'slug', 'parent_id', 'published', 'created_by', 'modified_by'];
    protected $guarded  = [];



    public function setSlugAttribute($value) {
        $this->attributes['slug'] = Str::slug( mb_substr($this->title, 0, 40) . "-" . \Carbon\Carbon::now()->format('dmyHi'), '-');
    }
// Get children category
    public function children() {
        return $this->hasMany(self::class, 'parent_id');
    }
    // Polymorphic relation with products
    public function products()
    {
        return $this->morphedByMany('App\Models\Product', 'categoryable');
    }
    public function scopeLastCategories($query, $count){
        return $query->orderBy('created_at', 'desc')->take($count)->get();
    }
}


