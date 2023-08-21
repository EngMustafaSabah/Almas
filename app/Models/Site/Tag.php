<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\{Factories\HasFactory, Model, SoftDeletes};
use Spatie\Translatable\HasTranslations;

class Tag extends Model
{
    use HasFactory, SoftDeletes, HasTranslations;
    
    public $translatable = ['tag_name', 'description', 'short_description'];

    protected $fillable = [
        'tag_name', 'slug', 'short_description',
        'description', 'usage', 'type', 'parent_id',
        'created_by', 'is_active', 'status',
    ];

    public function parent()
    {
        return $this->belongsTo(Tag::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Tag::class, 'parent_id');
    }

        // public function products()
    // {
    //     return $this->morphedByMany(Product::class, 'taggables');
    // }

    public function posts()
    {
        return $this->morphedByMany(Blog::class, 'taggables');
    }
}
