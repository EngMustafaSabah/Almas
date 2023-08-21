<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\{Factories\HasFactory, Model, SoftDeletes};
use Spatie\Translatable\HasTranslations;

class Category extends Model
{
    use HasFactory, SoftDeletes, HasTranslations;

    public $translatable = ['category_name', 'description', 'short_description'];

    protected $fillable = [
        'category_name', 'description', 'short_description',
        'slug', 'usage', 'type', 'parent_id',
        'created_by', 'is_active', 'status',
    ];

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id');
    }

    // public function products()
    // {
    //     return $this->morphedByMany(Product::class, 'categoryable');
    // }

    public function posts()
    {
        return $this->morphedByMany(Blog::class, 'categoryable');
    }
}
